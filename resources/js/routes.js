
import home from "./componentes/admin/home.vue"
import category from "./componentes/admin/category/category.vue"
import categoryList from "./componentes/admin/category/categoryList.vue"
import categoryAdd from "./componentes/admin/category/add.vue"
import categoryEdit from "./componentes/admin/category/categoryEdit.vue"
import post from "./componentes/admin/post/post.vue"
import postList from "./componentes/admin/post/list.vue"
import postAdd from "./componentes/admin/post/add.vue"
import postEdit from "./componentes/admin/post/edit.vue"

export const routes =[
    {
        path :"/",
        component:home,
    },
    {
        path :"/category",
        component:category,
        children:[
            {
                path:"/",
                component:categoryList,
            },
            {
                path:"/categoryAdd",
                component:categoryAdd,
            },
            {
                path:"/categoryEdit/:catId",
                component:categoryEdit,
            }

        ]
    },
    {
        path :"/post",
        component:post,
        children:[
            {
                path:"/",
                component:postList,
            },
            {
                path:"/postAdd",
                component:postAdd,
            },
            {
                path:"/postEdit",
                component:postEdit,
            }
        ]
    },


]
