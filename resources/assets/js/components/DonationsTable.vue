<template>
    <div>
        <vuetable ref="vuetable"
                  :api-url="url"
                  :fields="fields"
                  :css="css"
                  pagination-path=""
                  :per-page="4"
                  @vuetable:pagination-data="onPaginationData"
        >

        </vuetable>
        <div>

            <vuetable-pagination ref="pagination"
                                 :css="cssPagination"
                                 :icons="icons"
                                 @vuetable-pagination:change-page="onChangePage"
            ></vuetable-pagination>
        </div>
    </div>
</template>

<script>
    import Vuetable from 'vuetable-2/src/components/Vuetable'
    import VuetablePagination from 'vuetable-2/src/components/VuetablePagination'

    export default {

        props: {
           url: {
               type: String,
               required: true
           }
        },
        components: {
            Vuetable,
            VuetablePagination,
        },
        data () {
            return {
                css: {
                    tableClass: 'table table-striped table-bordered',
                    loadingClass: 'loading',
                    ascendingIcon: 'glyphicon glyphicon-chevron-up',
                    descendingIcon: 'glyphicon glyphicon-chevron-down',
                    sortHandleIcon: 'glyphicon glyphicon-menu-hamburger',
                },
                cssPagination: {
                    wrapperClass: 'pagination pull-right',
                    activeClass: 'btn-primary',
                    disabledClass: 'disabled',
                    pageClass: 'btn btn-border',
                    linkClass: 'btn btn-border',
                },
                icons: {
                    first: '',
                    prev: '',
                    next: '',
                    last: '',
                },
                fields: [
                    {
                        name: 'name',

                    },
                    {
                        name: 'amount',
                        callback: 'dollarSign',

                    },
                ],
            }
        },
        methods: {
            onPaginationData (paginationData) {
                this.$refs.pagination.setPaginationData(paginationData)
                this.$refs.paginationInfo.setPaginationData(paginationData)
            },
            onChangePage (page) {
                this.$refs.vuetable.changePage(page)
            },
            dollarSign(value){
                return '$' + value;
            }
        },
    }
</script>
