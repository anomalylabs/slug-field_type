<template>
    <div>
        <input type="text" class="input" :value="'Ryan Thompson'" @change="slugify()"/>
    </div>
</template>

<script>
export default {
    props: {
        fieldType: Object
    },
    slugify() {
        return 'Test';
    }
};
</script>

<style lang="scss">
//
</style>
