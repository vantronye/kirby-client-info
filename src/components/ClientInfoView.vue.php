<template>
    <k-view class="k-client-info-view">
        <k-header>{{ title }}</k-header>
        <k-form :fields="fields" v-model="formData" @submit="save" />
    </k-view>
</template>

<script>
export default {
    props: {
        title: String,
        fields: Object,
        content: Object
    },
    data() {
        return {
            formData: { ...this.content }
        };
    },
    methods: {
        async save() {
            try {
                await this.$api.post('site/update', { content: this.formData })
                this.$panel.notification.success('Saved successfully')
            } catch (error) {
                this.$panel.notification.error('Failed to save')
            }
        }
    }
}
</script>

<style scoped>
.k-client-info-view {
    padding: 2rem;
}
</style>
