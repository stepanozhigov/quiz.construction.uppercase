<template>
    <nav class="nav" :class="{mobil: $store.state.step > 0}">
        <div class="nav__wrapper">
            <div class="nav__items">
                <a :href="$store.state.siteUrl" class="nav__items_img">
                    <img src="../../images/logo.svg" alt="logo">
                </a>
                <div class="nav__items_contact">
                    <a :href="`tel:${$store.state.phoneSiteFormat}`">{{$store.state.phoneSite}}</a>
                    <span @click="$store.dispatch('callBack')">Заказать звонок</span>
                </div>
            </div>
        </div>
    </nav>
</template>
<script>
export default {
    name: 'Nav'
}
</script>
 
<style lang="scss">
@import '../../sass/mixins.scss';
.nav{
    &.mobil{
        display: none;
        @include above($break_sm) {
            display: block;
        } 
    }
    &__wrapper{
        @include wrapper();
    }
    &__items{
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: rem(80);
        &_img{
            display: flex;
            align-items: center;
            img{
                height: rem(32);
                @include above($break_sm) {
                    height: rem(48);
                } 
            }
            span{
                font-size: rem(14);
                margin-left: rem(12);
                @include above($break_sm) {
                    font-size: rem(24);
                    margin-left: rem(24);
                }
            }
        }
        &_contact{
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            flex-shrink: 0;
            padding-left: rem(8);
            @include above($break_sm) {
                flex-direction: row;
                align-items: center;
            }
            a{
                line-height: 1.5;
            }
            span{
                font-size: rem(14);
                line-height: 1.14;
                color: $primary_color;
                position: relative;
                cursor: pointer;
                @include above($break_sm) {
                    font-size: rem(16);
                    margin-left: rem(16);
                    letter-spacing: rem(1.07);
                }
                &::before{
                    content: '';
                    position: absolute;
                    bottom: 0;
                    height: rem(1);
                    width: 100%;
                    background: $primary_color;
                    transition: all .3s ease-out;
                }
                &:hover::before{
                    bottom: rem(-2);
                }
            }
        }
    }
}
</style>