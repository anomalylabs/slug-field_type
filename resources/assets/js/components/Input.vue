<template>
    <div>
        <input type="text" class="input" v-model="value" @keyup="update"/>
    </div>
</template>

<script>

var slug = require('slug');

// Replace spaces
slug.charmap[' '] = '-';

export default {
    data() {
        return {
            value: 'slug',
            slugify: 'name',
        }
    },
    methods: {
        update() {
            this.value = slug(this.value, {
                lower: true,
                replacement: '-',
            })
        },
        sync() {
            
            if (!this.slugify) {
                return;
            }

            this.value = slug(this.slugify.value, {
                lower: true,
                replacement: '-',
            })
        },
        watch(selector) {

            let self = this;

            if (self.slugify = document.querySelector('[name="' + selector + '"]')) {

                setTimeout(function() {
                    self.slugify.addEventListener('keyup', function() {
                        self.sync();
                    });
                }, 250);
            }
        }
    },
    mounted() {
        this.watch(this.slugify);
    }
};
</script>

<style lang="scss">
//
</style>
