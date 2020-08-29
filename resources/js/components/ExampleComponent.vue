<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body" v-if="test">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
              rating: 4,
              scrollPosition: null,
              subscribe: null,
              ContactName: null,
              ContactEmail: null,
              phone: "555 00 00 00",
              ContactMessage: null,
              drawer: null,
              eng: true,
              rus: false,
              ka: false,
              isActive: false,
              test:1,
            };
          },
        mounted() {
            console.log('Component mounted.')
        }
    };
</script>
