import{g as i}from"./params.597cd0f5.js";import"./WpTable.e2f412d1.js";import"./default-i18n.3a91e0e5.js";import"./constants.0d8c074c.js";import{n as r}from"./_plugin-vue2_normalizer.61652a7c.js";import"./index.ec9852b3.js";import"./SaveChanges.e40a9083.js";import{U as n}from"./Url.c71d5763.js";import{m as o,b as l}from"./vuex.esm.8fdeb4b6.js";import{C as d}from"./index.4b67d3e2.js";import{C as u,S as c}from"./Caret.d93b302e.js";import{C as _}from"./Index.5f7ddb17.js";import{C as f}from"./Tooltip.68a8a92b.js";const p={components:{CoreAlert:d,CoreLoader:u,CoreModal:_,CoreTooltip:f,SvgClose:c},mixins:[n],props:{feature:{type:Object,required:!0},canActivate:{type:Boolean,default(){return!0}},canManage:{type:Boolean,default(){return!1}},staticCard:Boolean},data(){return{showNetworkModal:!1,failed:!1,loading:!1,activated:!1,featureUpgrading:!1,strings:{version:this.$t.__("Version",this.$td),updateToVersion:this.$t.__("Update to version",this.$td),activated:this.$t.__("Activated",this.$td),deactivated:this.$t.__("Deactivated",this.$td),notInstalled:this.$t.__("Not Installed",this.$td),upgradeToPro:this.$t.__("Upgrade to Pro",this.$td),upgradeYourPlan:this.$t.__("Upgrade Your Plan",this.$td),updateFeature:this.$t.__("Update Addon",this.$td),permissionWarning:this.$t.__("You currently don't have permission to update this addon. Please ask a site administrator to update.",this.$td),manage:this.$t.__("Manage",this.$td),activateError:this.$t.__("An error occurred while activating the addon. Please upload it manually or contact support for more information.",this.$td),updateRequired:this.$t.sprintf(this.$t.__("An update is required for this addon to continue to work with %1$s %2$s.",this.$td),"AIOSEO","Pro"),areYouSureNetworkChange:this.$t.__("This is a network-wide change.",this.$td),yesProcessNetworkChange:this.$t.__("Yes, process this network change",this.$td),noChangedMind:this.$t.__("No, I changed my mind",this.$td)}}},computed:{networkChangeMessage(){return this.activated?this.$t.__("Are you sure you want to activate this addon across the network?",this.$td):this.$t.__("Are you sure you want to deactivate this addon across the network?",this.$td)}},methods:{...o(["deactivatePlugins","installPlugins","upgradePlugins"]),...l(["updateAddon"]),closeNetworkModal(a=!1){this.activated=a?this.activated:!this.activated,this.showNetworkModal=!1,a&&this.actuallyProcessStatusChange(a)},processStatusChange(){if(this.activated=!this.activated,this.$aioseo.data.isNetworkAdmin){this.showNetworkModal=!0;return}this.actuallyProcessStatusChange()},actuallyProcessStatusChange(){this.failed=!1,this.loading=!0;const a=this.activated?"installPlugins":"deactivatePlugins";this[a]([{plugin:this.feature.basename}]).then(t=>{this.loading=!1,t.body.failed.length&&(this.activated=!this.activated,this.failed=!0)}).catch(()=>{this.loading=!1,this.activated=!this.activated})},processUpgradeFeature(){this.failed=!1,this.featureUpgrading=!0;const a=this.$addons.getAddon(this.feature.sku);this.upgradePlugins([{plugin:this.feature.sku}]).then(t=>{if(this.featureUpgrading=!1,t.body.failed.length){this.activated=!1,this.failed=!0;return}this.activated=!0;const e=t.body.completed[a.sku];a.hasMinimumVersion=!0,a.isActive=!0,a.installedVersion=e.installedVersion,this.updateAddon(a)}).catch(()=>{this.featureUpgrading=!1,this.activated=!1})}},mounted(){this.feature.isActive&&(this.activated=!0);const a=i();!this.activated&&a["aioseo-activate"]&&a["aioseo-activate"]===this.feature.sku&&(this.loading=!0,this.activated=!0,this.installPlugins([{plugin:this.feature.basename}]).then(()=>this.loading=!1).catch(()=>{this.loading=!1,this.activated=!this.activated}))}};var h=function(){var t=this,e=t._self._c;return e("div",{staticClass:"aioseo-feature-card"},[e("div",{staticClass:"feature-card-body",class:{static:t.staticCard}},[e("div",{staticClass:"feature-card-header"},[t._t("title")],2),e("div",{staticClass:"feature-card-description"},[t._t("description"),(!t.activated||t.feature.requiresUpgrade)&&!t.staticCard?e("div",{staticClass:"learn-more"},[e("a",{attrs:{href:t.$links.utmUrl("feature-manager-addon-link",t.feature.sku,t.feature.learnMoreUrl),target:"_blank"}},[t._v(t._s(t.$constants.GLOBAL_STRINGS.learnMore))]),e("a",{staticClass:"no-underline",attrs:{href:t.$links.utmUrl("feature-manager-addon-link",t.feature.sku,t.feature.learnMoreUrl),target:"_blank"}},[t._v(" →")])]):t._e(),t.feature.manageUrl&&(t.activated&&!t.feature.requiresUpgrade||t.staticCard)&&t.canManage?e("div",{staticClass:"learn-more"},[e("a",{attrs:{href:t.getHref(t.feature.manageUrl)}},[t._v(t._s(t.strings.manage))]),e("a",{staticClass:"no-underline",attrs:{href:t.getHref(t.feature.manageUrl)}},[t._v(" → ")])]):t._e(),t.failed?e("core-alert",{staticClass:"install-failed",attrs:{type:"red"}},[t._v(" "+t._s(t.strings.activateError)+" ")]):t._e()],2)]),t.canActivate?e("div",{staticClass:"feature-card-footer",class:{"upgrade-required":t.feature.requiresUpgrade||!t.$aioseo.license.isActive}},[!t.feature.requiresUpgrade&&t.$aioseo.license.isActive&&(!t.feature.installed||t.feature.hasMinimumVersion)?e("div",{staticClass:"feature-card-install-activate"},[t.loading?e("core-loader",{attrs:{dark:""}}):t._e(),!t.loading&&t.feature.installedVersion?e("span",{staticClass:"version"},[t._v(" "+t._s(t.strings.version)+" "+t._s(t.feature.installedVersion)+" ")]):t._e(),e("span",{staticClass:"status"},[t._v(" "+t._s(t.activated?t.strings.activated:t.feature.installed||t.feature.canInstall?t.strings.deactivated:t.strings.notInstalled)+" ")]),t.feature.installed||t.feature.canInstall?e("base-toggle",{attrs:{value:t.activated},on:{input:t.processStatusChange}}):t._e()],1):t._e(),t.feature.requiresUpgrade||!t.$aioseo.license.isActive?e("div",{staticClass:"feature-card-upgrade-cta"},[e("base-button",{attrs:{type:"green",size:"medium",tag:"a",href:t.$isPro?t.$links.getUpsellUrl("feature-manager-upgrade",t.feature.sku,"pricing"):t.$links.getUpsellUrl("feature-manager-upgrade",t.feature.sku,"liteUpgrade"),target:"_blank"}},[t.$isPro?e("span",[t._v(t._s(t.strings.upgradeYourPlan))]):t._e(),t.$isPro?t._e():e("span",[t._v(t._s(t.strings.upgradeToPro))])])],1):t._e(),t.$isPro&&!t.feature.requiresUpgrade&&t.feature.installed&&!t.feature.hasMinimumVersion?e("div",{staticClass:"feature-card-upgrade-cta"},[t.activated&&!t.loading?e("core-tooltip",{scopedSlots:t._u([{key:"tooltip",fn:function(){return[t._v(" "+t._s(t.strings.updateRequired)+" "),t.$addons.userCanUpdate(t.feature.sku)?t._e():e("strong",[t._v(" "+t._s(t.strings.permissionWarning)+" ")])]},proxy:!0}],null,!1,1310176396)},[e("span",{staticClass:"version"},[t._v(" "+t._s(t.strings.updateToVersion)+" "+t._s(t.feature.minimumVersion)+" ")])]):t._e(),e("base-button",{attrs:{type:"blue",size:"medium",loading:t.featureUpgrading,disabled:!t.$addons.userCanUpdate(t.feature.sku)},on:{click:t.processUpgradeFeature}},[t._v(" "+t._s(t.strings.updateFeature)+" ")])],1):t._e()]):t._e(),t.showNetworkModal?e("core-modal",{attrs:{"no-header":""},on:{close:function(s){return t.closeNetworkModal(!1)}},scopedSlots:t._u([{key:"body",fn:function(){return[e("div",{staticClass:"aioseo-modal-body"},[e("button",{staticClass:"close",on:{click:function(s){return s.stopPropagation(),t.closeNetworkModal(!1)}}},[e("svg-close",{on:{click:function(s){return s.stopPropagation(),t.closeNetworkModal(!1)}}})],1),e("h3",[t._v(t._s(t.strings.areYouSureNetworkChange))]),e("div",{staticClass:"reset-description"},[t._v(" "+t._s(t.networkChangeMessage)+" ")]),e("base-button",{attrs:{type:"blue",size:"medium"},on:{click:function(s){return t.closeNetworkModal(!0)}}},[t._v(" "+t._s(t.strings.yesProcessNetworkChange)+" ")]),e("base-button",{attrs:{type:"gray",size:"medium"},on:{click:function(s){return t.closeNetworkModal(!1)}}},[t._v(" "+t._s(t.strings.noChangedMind)+" ")])],1)]},proxy:!0}],null,!1,1587611151)}):t._e()],1)},g=[],v=r(p,h,g,!1,null,null,null,null);const z=v.exports,m={};var C=function(){var t=this,e=t._self._c;return e("svg",{attrs:{viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg"}},[e("path",{attrs:{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M11 15H7C5.35 15 4 13.65 4 12C4 10.35 5.35 9 7 9H11V7H7C4.24 7 2 9.24 2 12C2 14.76 4.24 17 7 17H11V15ZM17 7H13V9H17C18.65 9 20 10.35 20 12C20 13.65 18.65 15 17 15H13V17H17C19.76 17 22 14.76 22 12C22 9.24 19.76 7 17 7ZM16 11H8V13H16V11Z",fill:"currentColor"}})])},$=[],k=r(m,C,$,!1,null,null,null,null);const O=k.exports,w={};var y=function(){var t=this,e=t._self._c;return e("svg",{staticClass:"aioseo-redirect",attrs:{viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg"}},[e("path",{attrs:{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M10.59 9.17L5.41 4L4 5.41L9.17 10.58L10.59 9.17ZM14.5 4L16.54 6.04L4 18.59L5.41 20L17.96 7.46L20 9.5V4H14.5ZM13.42 14.82L14.83 13.41L17.96 16.54L20 14.5V20H14.5L16.55 17.95L13.42 14.82Z",fill:"currentColor"}})])},M=[],V=r(w,y,M,!1,null,null,null,null);const E=V.exports,U={};var H=function(){var t=this,e=t._self._c;return e("svg",{staticClass:"aioseo-sitemaps-pro",attrs:{viewBox:"0 0 28 28",fill:"none",xmlns:"http://www.w3.org/2000/svg"}},[e("path",{attrs:{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M23.45 3.5H4.55C3.96667 3.5 3.5 3.96667 3.5 4.55V23.45C3.5 23.9167 3.96667 24.5 4.55 24.5H23.45C23.9167 24.5 24.5 23.9167 24.5 23.45V4.55C24.5 3.96667 23.9167 3.5 23.45 3.5ZM10.5 8.16667H8.16667V10.5H10.5V8.16667ZM19.8333 8.16667H12.8333V10.5H19.8333V8.16667ZM19.8333 12.8333H12.8333V15.1667H19.8333V12.8333ZM12.8333 17.5H19.8333V19.8333H12.8333V17.5ZM8.16667 12.8333H10.5V15.1667H8.16667V12.8333ZM10.5 17.5H8.16667V19.8333H10.5V17.5ZM5.83333 22.1667H22.1667V5.83333H5.83333V22.1667Z",fill:"currentColor"}})])},P=[],b=r(U,H,P,!1,null,null,null,null);const G=b.exports;export{z as C,O as S,E as a,G as b};
