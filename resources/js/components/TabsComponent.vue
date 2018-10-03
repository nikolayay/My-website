<template>
    <div class="hero is-info is-fullheight">

        <div class="hero-body">

            <slot></slot>
            
        </div>
        
    
        <!--Buttons that stick to the bottom of the hero and select the appropriate tabs -->
        <div class="hero-foot">
          <nav class="tabs is-boxed is-fullwidth">
            <div class="container">
              <ul>
                <li v-for="tab in tabs" :class="{ 'is-active' : tab.isActive}">
                    <a @click="selectTab(tab)">{{tab.name}}</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>

    </div>
</template>

<script>
export default {

  name: 'TabsComponent',


  data () {
    return {
        tabs: []

    };
  },

  created() {
    this.tabs = this.$children;
  }, 

  methods: {
    selectTab(selectedTab) {
        this.tabs.forEach(tab => {
            tab.isActive = (tab.name == selectedTab.name)
        })
    }
  }
}
</script>

