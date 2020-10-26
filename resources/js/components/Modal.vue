<template>
    <transition name="modal">
        <div class="modal_mask">
            <div class="modal_container">
                <span class="modal_close close" @click="$emit('close')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 18 18">
                        <path fill="none" stroke="#898886" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" stroke-width="1.5" d="M1 1l16 16"/>
                        <path fill="none" stroke="#898886" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" stroke-width="1.5" d="M17 1L1 17"/>
                    </svg>
                </span>
                <slot name="content"></slot>
            </div>
        </div>
    </transition>
</template>