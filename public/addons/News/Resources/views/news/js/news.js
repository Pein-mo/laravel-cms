define(['vue', 'hdjs'], function (vue, hdjs) {
    return function (data) {
        new vue({
            el: "#app",
            mounted(){

            },
            data: {
                news: data,
                active: {}
            },
            methods: {
                add() {
                    this.news.push({title:'后盾人',discription:'后盾人 人人做后盾',picurl:'http://www.houdunwang.com/1.jpg',url:'http://www.houdunren.com'});
                },
                del(pos) {

                },
                prev(pos) {

                },
                next(pos) {

                },
                edit(item) {

                },
                upImagePc(){

                }
            }
        })
    }
})
