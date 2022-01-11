import moment from 'moment';
import Vue from "vue"
Vue.filter('timeFormate', function (value) {
    return moment(value).format("MMM Do YY");
  })
