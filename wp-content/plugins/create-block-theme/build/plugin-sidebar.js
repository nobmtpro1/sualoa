(()=>{"use strict";var e={n:t=>{var a=t&&t.__esModule?()=>t.default:()=>t;return e.d(a,{a}),a},d:(t,a)=>{for(var r in a)e.o(a,r)&&!e.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:a[r]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t)};const t=window.wp.element,a=window.wp.plugins,r=window.wp.editSite,n=window.wp.primitives,o=(0,t.createElement)(n.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,t.createElement)(n.Path,{d:"M14.103 7.128l2.26-2.26a4 4 0 00-5.207 4.804L5.828 15a2 2 0 102.828 2.828l5.329-5.328a4 4 0 004.804-5.208l-2.261 2.26-1.912-.512-.513-1.912zm-7.214 9.64a.5.5 0 11.707-.707.5.5 0 01-.707.707z"})),l=window.wp.i18n,c=window.wp.components,i=window.wp.notices,m=window.wp.data,h=window.wp.apiFetch;var s=e.n(h);const u=()=>{const{createErrorNotice:e}=(0,m.useDispatch)(i.store),[a,r]=(0,t.useState)({name:"",description:"",uri:"",author:"",author_uri:"",tags_custom:""});return(0,m.useSelect)((e=>{const t=e("core").getCurrentTheme();r({name:t.name.raw,description:t.description.raw,author:t.author.raw,author_uri:t.author_uri.raw,theme_uri:t.theme_uri.raw})}),[]),(0,t.createElement)(c.PanelBody,null,(0,t.createElement)(c.__experimentalHeading,null,(0,l.__)("Export","create-block-theme")),(0,t.createElement)(c.__experimentalVStack,null,(0,t.createElement)(c.__experimentalText,{variant:"muted"},(0,l.__)("Export your theme with updated templates and styles.","create-block-theme")),(0,t.createElement)(c.__experimentalSpacer,null),(0,t.createElement)(c.TextControl,{label:(0,l.__)("Theme name","create-block-theme"),value:a.name,onChange:e=>r({...a,name:e}),placeholder:(0,l.__)("Theme name","create-block-theme")}),(0,t.createElement)(c.TextControl,{label:(0,l.__)("Theme description","create-block-theme"),value:a.description,onChange:e=>r({...a,description:e}),placeholder:(0,l.__)("A short description of the theme","create-block-theme")}),(0,t.createElement)(c.TextControl,{label:(0,l.__)("Theme URI","create-block-theme"),value:a.uri,onChange:e=>r({...a,uri:e}),placeholder:(0,l.__)("https://github.com/wordpress/twentytwentythree/","create-block-theme")}),(0,t.createElement)(c.TextControl,{label:(0,l.__)("Author","create-block-theme"),value:a.author,onChange:e=>r({...a,author:e}),placeholder:(0,l.__)("the WordPress team","create-block-theme")}),(0,t.createElement)(c.TextControl,{label:(0,l.__)("Author URI","create-block-theme"),value:a.author_uri,onChange:e=>r({...a,author_uri:e}),placeholder:(0,l.__)("https://wordpress.org/","create-block-theme")})),(0,t.createElement)(c.__experimentalSpacer,null),(0,t.createElement)(c.Button,{variant:"secondary",disabled:!a.name,onClick:()=>{const t={path:"/create-block-theme/v1/export",method:"POST",data:a,headers:{"Content-Type":"application/json"},parse:!1};!async function(){try{!async function(e){const t=await e.blob(),a=e.headers.get("Content-Disposition").split("filename=")[1];if(navigator.msSaveBlob||navigator.saveBlob)(navigator.msSaveBlob||navigator.saveBlob).call(navigator,t,a);else{const e=URL.createObjectURL(t),r=document.createElement("a");r.href=e,r.download=a,document.body.appendChild(r),r.click(),document.body.removeChild(r),setTimeout((()=>{URL.revokeObjectURL(e)}),100)}}(await s()(t))}catch(t){const a=t.message&&"unknown_error"!==t.code?t.message:(0,l.__)("An error occurred while attempting to export the theme.");e(a,{type:"snackbar"})}}()}},(0,l.__)("Export","create-block-theme")),(0,t.createElement)(c.__experimentalSpacer,null),!a.name&&(0,t.createElement)(c.__experimentalText,{variant:"muted"},(0,l.__)("Theme name is required for export.","create-block-theme")))};(0,a.registerPlugin)("cbt-plugin-sidebar",{render:()=>(0,t.createElement)(t.Fragment,null,(0,t.createElement)(r.PluginSidebarMoreMenuItem,{target:"create-block-theme-sidebar",icon:o},(0,l.__)("Create Block Theme")),(0,t.createElement)(r.PluginSidebar,{name:"create-block-theme-sidebar",icon:o,title:(0,l.__)("Create Block Theme")},(0,t.createElement)(u,null)))})})();