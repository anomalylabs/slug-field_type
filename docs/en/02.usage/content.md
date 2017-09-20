## Usage[](#usage)

This section will show you how to use the field type via API and in the view layer.


### Setting Values[](#usage/setting-values)

You can set the value by string and the slug will be automatically generated:

    $entry->example = "Ryan Thompson";

    echo $entry->example; // ryan_thompson


### Basic Output[](#usage/basic-output)

The value returned is always `null` or the slug value:

    $entry->example; // example_slug


### Presenter Output[](#usage/presenter-output)

When accessing the field value from a decorated entry model the an instance of `\Anomaly\FilesModule\Slug\SlugPresenter` will be returned.


#### SlugFieldTypePresenter::humanize()[](#usage/presenter-output/slugfieldtypepresenter-humanize)

The `humanize` method returns the slug without separators.

###### Returns: `string`

###### Example

    $decorated->example->humanize(); // ryan thompson

    ucwords($decorated->example->humanize()); // Ryan Thompson

###### Twig

    {{ decorated.example.humanize() }} // ryan thompson

    {{ zucwords(decorated.example.humanize()) }} // Ryan Thompson
