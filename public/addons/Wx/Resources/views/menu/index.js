define(['vue'],function (vue) {
    return function (data) {
        new vue({
            el:'#app',
            data:{
                menus:data
            },
            methods:{
                add(){
                    if(this.menus.length < 3){
                        let item = {type:'view',name:'后盾人',url:'houdunren.com'}
                        this.menus.push(item)
                    }

                }
            }
        })
    }
})
