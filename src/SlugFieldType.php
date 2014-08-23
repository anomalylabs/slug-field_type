<?php namespace Streams\Addon\FieldType\Slug;

use Streams\Core\Addon\FieldTypeAbstract;

class SlugFieldType extends FieldTypeAbstract
{
    /**
     * The database column type this field type uses.
     *
     * @var string
     */
    public $columnType = 'string';

    /**
     * Field type version
     *
     * @var string
     */
    public $version = '1.1.0';

    /**
     * Available field type settings.
     *
     * @var array
     */
    public $settings = array(
        'slug_type',
        'slug_field',
    );

    /**
     * Field type author information.
     *
     * @var array
     */
    public $author = array(
        'name' => 'AI Web Systems, Inc.',
        'url'  => 'http://aiwebsystems.com/',
    );

    /**
     * Process logic before everything is rendered to screen.
     */
    public function event()
    {
        $this->js('jquery.slugify.js');
    }

    /**
     * Process before saving.
     *
     * @return string
     */
    public function preSave()
    {
        return $this->slugify($this->value);
    }

    /**
     * Return the input used for forms.
     *
     * @return mixed
     */
    public function formInput()
    {
        $options = array(
            'autocomplete' => 'off',
        );

       $js = "
            <script>
                $(document).ready(function(){
                    Pyro.GenerateSlug('#{$this->formSlug}', '#{$this->formSlug}', '{$this->getParameter('slug_type')}');
                });
            </script>
            ";

        return \Form::input('text', $this->formSlug, $this->value, $options) . "\n" . $js;
    }

    /**
     * Return the string output value.
     *
     * @return string
     */
    public function stringOutput()
    {
        return $this->slugify($this->value);
    }

    /**
     * Return a slugified a string.
     *
     * @param $text
     * @return string
     */
    public function slugify($text)
    {
        // Replace non letter or digits by our slug type
        $text = trim(preg_replace('~[^\\pL\d]+~u', $this->getParameter('slug_type', '-'), $text));

        // Transliterate
        $text = strtolower(iconv('utf-8', 'us-ascii//TRANSLIT', $text));

        // Remove unwanted characters
        $value = preg_replace('~[^-\w]+~', '', $text);

        return $text;
    }
}
