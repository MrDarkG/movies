<template>
    <div class="container text-light mt-2">
        <div class="row justify-content-between">
            <div>
                <h4>ძებნა</h4>
            </div>
            <div v-on:click="togglefilters()" class=" ">
                <div v-if="showfilters" :class="filteractive">
                    <i class="fa fa-filter fa-lg " aria-hidden="true" ></i>
                </div>
                <div v-else :class="filteractive">
                    <i  class="fa fa-filter fa-lg pr-col "></i>
                </div>
            </div>
        </div>
        <div class="row mb-2 justify-content-between showfilters" v-if="showfilters" id="showfilters" >
            <div class=" col-md-6 mb-2">
                <multiselect v-model="value" tag-placeholder="Add this as new tag" placeholder="ჟანრი" label="name" track-by="cat_id" :options="options" :multiple="true" :taggable="true" @tag="addTag" :close-on-select="false"></multiselect>
            </div>
            <div class=" col-md-6 mb-2">
                <multiselect v-model="actvalue" tag-placeholder="Add this as new tag" placeholder="მსახიობი" label="name" track-by="ar_id" :options="actoptions" :multiple="true" :taggable="true" @tag="addTagartist" :close-on-select="false"></multiselect>
            </div>
            <div class=" col-md-6 mb-2 pl-4 pr-4">
                 <div>
                    <label>IMDB {{ rangevalue[0] }} - {{ rangevalue[1] }}</label>     
                 </div>       
                <div style="width:100%"> 
                     
                    <vue-slider v-bind="rangeoptions" v-model="rangevalue" />
                 </div>  
            </div>
            <div class=" col-md-6 mb-2 pl-4 pr-4">
                 <div>
                    <label>წელი {{ yearrange[0] }} - {{ yearrange[1] }}</label>     
                 </div>       
                <div style="width:100%"> 
                     
                    <vue-slider v-bind="yearrangeoptions" v-model="yearrange" />
                 </div>  
            </div>
        </div>
        <div class=" ">
            <div class="d-flex flex-nowrap flex-column">
                <input type="text" name="search" class="form-control  search" id="search" placeholder="ძებნა"> 
                <div v-if="showsearch" class="searchresult justify-content-center flex-column" id="searchresult">
                    <div class="results flex-wrap justify-content-start">
                        <a href="facebook.com">
                            <div class="flip col-md-3">
                                <div class="front" style="background-image: url(https://images.pexels.com/photos/540518/pexels-photo-540518.jpeg)">
                                   <span class="text-shadow">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                </div>
                                <div class="back">
                                   <h5>Angular</h5>
                                   <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
                                </div>
                            </div>
                            </a>
                        
                    </div>
                    <center><a href="https://facebook.com">ყველას ნახვა</a></center>
                </div>
            </div>

        </div>
    </div>

</template>

<script>
  import Multiselect from 'vue-multiselect'
    import VueSlider from 'vue-slider-component'
    import 'vue-slider-component/theme/antd.css'
  // register globally
  Vue.component('multiselect', Multiselect)
    export default {
        props: [
            "cats","artist"
            
        ],
        components: {
            Multiselect,VueSlider
        },
        data(){
            return {
                filteractive:"fadein heartbeat",
                alert: false,
                rangevalue:[0,10],
                showsearch: 0,
                showfilters:0,
                actvalue: [
                
                ],
                actoptions: [
                    
                ],
                value: [
                
                ],
                options: [
                    
                ],
                rangeoptions: {
                    dotSize: 20,
                    width: 'auto',
                    height: 10,
                    contained: false,
                    direction: 'ltr',
                      data: null,
                    dataLabel: 'label',
                    dataValue: 'value',
                    min: 0,
                    max: 10,
                    interval: 1,
                    disabled: false,
                    clickable: true,
                    duration: 0.5,
                    adsorb: false,
                    lazy: false,
                    tooltip: 'active',
                    tooltipPlacement: 'top',
                    tooltipFormatter: void 0,
                    useKeyboard: false,
                    keydownHook: null,
                    dragOnClick: false,
                    enableCross: true,
                    fixed: false,
                    minRange: void 0,
                    maxRange: void 0,
                    order: true,
                    marks: false,
                    dotOptions: void 0,
                    dotAttrs: void 0,
                    process: true,
                    dotStyle: void 0,
                    railStyle: void 0,
                    processStyle: void 0,
                    tooltipStyle: void 0,
                    stepStyle: void 0,
                    stepActiveStyle: void 0,
                    labelStyle: void 0,
                    labelActiveStyle: void 0,
                },
                yearrangeoptions: {
                    dotSize: 20,
                    width: 'auto',
                    height: 10,
                    contained: false,
                    direction: 'ltr',
                    data: null,
                    dataLabel: 'label',
                    dataValue: 'value',
                    min: 1888,
                    max: 2020,
                    interval: 1,
                    disabled: false,
                    clickable: true,
                    duration: 0.5,
                    adsorb: false,
                    lazy: false,
                    tooltip: 'active',
                    tooltipPlacement: 'top',
                    tooltipFormatter: void 0,
                    useKeyboard: false,
                    keydownHook: null,
                    dragOnClick: false,
                    enableCross: true,
                    fixed: false,
                    minRange: void 0,
                    maxRange: void 0,
                    order: true,
                    marks: false,
                    dotOptions: void 0,
                    dotAttrs: void 0,
                    process: true,
                    dotStyle: void 0,
                    railStyle: void 0,
                    processStyle: void 0,
                    tooltipStyle: void 0,
                    stepStyle: void 0,
                    stepActiveStyle: void 0,
                    labelStyle: void 0,
                    labelActiveStyle: void 0,
                },
                yearrange:[1888,2020],

            }
        },
        methods:{
            addTag (newTag) {
              const tag = {
                name: newTag,
                cat_id: newTag.substring(0, 2) + Math.floor((Math.random() * 10000000))
              }
              this.options.push(tag);
              this.value.push(tag);
            },
            addTagartist (newTag) {
              const tag = {
                name: newTag,
                ar_id: newTag.substring(0, 2) + Math.floor((Math.random() * 10000000))
              }
              this.options.push(tag);
              this.value.push(tag);
            },
            showsearchfun(){
                this.showsearch=1;
            },
            togglefilters(){
                if (this.showfilters==0) {
                    this.showfilters=1;
                }
                else{
                    this.showfilters=0;
                }
            },
        },
        mounted() {
            this.options=this.cats;
            this.actoptions=this.artist;
        }
    };
</script>
