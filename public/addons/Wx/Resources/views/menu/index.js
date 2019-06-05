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
                        let item = {type:'view',name:'后盾人',url:'houdunren.com',sub_button:[]}
                        this.menus.push(item)
                    }

                },
                delMenu(pos){
                    this.menus.splice(pos,1);
                },
                addSubMenu(item){
                    if(item.sub_button.length < 5){
                        let menu = {type:'view',name:'后盾人',url:'houdunren.com'}
                        item.sub_button.push(menu)
                    }
                }
            }
        })
    }
})
