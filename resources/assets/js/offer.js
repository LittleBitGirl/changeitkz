window.Event = new class {

    constructor() {
        this.vue = new Vue();
    }

    fire(event, data = null) {
        this.vue.$emit(event, data);
    }

    listen(event, callback) {
        this.vue.$on(event, callback);
    }
};

modal = Vue.component('modal', {
    template: `<div :class="{'is-active': isActive}" class="modal active">
                  <div class="modal-background"></div>
                  
                  <div class="modal-card">
                    <header class="modal-card-head">
                      <p class="modal-card-title">Modal title</p>
                      <button class="delete" aria-label="close" @click="closeModal"></button>
                    </header>
                    
                    <section class="modal-card-body">
                      <slot></slot>
                    </section>
                    
                    <footer class="modal-card-foot">
                      <button class="button is-success">Save changes</button>
                      <button class="button">Cancel</button>
                    </footer>
                  </div>
                </div>`,
    data() {
        return {
            isActive: false
        }
    },

    created(){
        Event.listen('opener-clicked', () => {
            this.isActive = true;
        });
        Event.listen('closer-clicked', () => {
            this.isActive = false;
        });
    },

    methods:{
        closeModal() {
            Event.fire('closer-clicked');
        }
    }

});

root = new Vue({
    el: "#modalRoot",
    methods: {
        openModal() {
            Event.fire('opener-clicked');
        }
    }
});
