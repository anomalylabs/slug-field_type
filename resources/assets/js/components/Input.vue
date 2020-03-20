<template>
    <div>
        <input type="text" class="input" :name="name" v-model="value" @keyup="update()"/>
    </div>
</template>

<script>

let slug = require('slug');

export default {
    props: {
        value: String,
        slugify: String,
        lowercase: Boolean,
        replacement: String,
    },
    data: {
        source: null,
    },
    methods: {
        update() {
            this.value = slug(this.value, {
                lower: this.lowercase,
                replacement: this.replacement,
            })
        },
        sync() {
            
            if (!this.source) {
                return;
            }

            this.value = slug(this.source.value, {
                lower: this.lowercase,
                replacement: '-',
            })
        },
        watch(selector) {

            let self = this;

            if (self.source = document.querySelector('[name="' + selector + '"]')) {
                setTimeout(function() {
                    self.source.addEventListener('keyup', function() {
                        self.sync();
                    });
                }, 250);
            }
        }
    },
    mounted() {

        if (this.slugify) {
            this.watch(this.slugify);
        }

        if (this.replacement) {
            slug.charmap[' '] = this.replacement;
        }
    }
};
</script>

<style lang="scss">
//
</style>
