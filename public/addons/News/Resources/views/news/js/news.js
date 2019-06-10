require(['vue', 'hdjs'], function (vue, hdjs) {
    return function (data) {
        new vue({
            el: "#app",
            data: {
                news:data,
                active:{}
            },
            methods: {
                add() {

                },
                del(pos) {

                },
                prev(pos) {

                },
                next(pos) {

                },
                edit(pos){

                }
            }
        })
    }
});
