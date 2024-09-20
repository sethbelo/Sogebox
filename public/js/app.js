  // Données pour les mois
var months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 
'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
// Données pour les ventes et la production
var sales = [820, 932, 901, 934, 1290, 1330, 1320, 1234, 1100, 1340, 1380, 1440];
var production = [720, 832, 801, 834, 1190, 1230, 1220, 1134, 1000, 1240, 1280, 1340];

// Configuration du graphique des ventes
var salesOption = {
title: {
text: 'Ventes de produits par mois'
},
tooltip: {},
xAxis: {
type: 'category',
data: months
},
yAxis: {
type: 'value'
},
  series: [{
    name: 'Ventes',
    type: 'bar',
    data: sales,
    showBackground: true,
  }]
};

// Configuration du graphique de production
var productionOption = {
title: {
text: 'Production de produits par mois'
},
tooltip: {},
xAxis: {
type: 'category',
data: months
},
yAxis: {
type: 'value'
},
  series: [{
    name: 'Production',
    type: 'bar',
    data: production,
    showBackground: true,
  }]
};

// Initialisation des graphiques
var salesChart = echarts.init(document.getElementById('salesChart'));
var productionChart = echarts.init(document.getElementById('productionChart'));

// Application des options aux graphiques
salesChart.setOption(salesOption);
productionChart.setOption(productionOption);

// table
$(function () {




  var dimension = {
    height: 'auto',
    width: 'auto',
    // tuple: (width, height)
    actions: {}
  };


  var callback = { // each item has two categories of call: done and fail, respectively.
    load: undefined,
    edit: undefined,
    delete: undefined,
    detail: undefined,
    actions: undefined  // general callback for action
  };






  var model_name = "paycode", path = "/att/paycode/table/",
    history_opts = [],
    is_history = history_opts && history_opts.length;

    path = is_history
         ? concatenate_url(path, {
      'history_opts': JSON.stringify(history_opts)
    })
         : concatenate_url(path, {
      'except_limit': get_except_limit(model_name)
    });

  $.ajax({
    type: 'GET',
    url: path,
    dataType: 'json',
    success: function (res) {
      var model_name = res.model_name, app_label = res.app_label
      if (path.indexOf("history_opts") != -1) {
        model_name = 'history_opts_' + model_name
      }
      var data_grid_opts = {
          model: model_name, app: app_label, csrf_token: "wlAdK0vjkJAVHgaIIOyrV03eBa6sc0LCWfHM8KxX49wHNFhIJpkk6AHLtqLosied",
          dimension: dimension, callback: callback, is_history: is_history,
          history_contenttype: res.history_contenttype,
          del_url: res.del_url, edit_url: res.edit_url, detail_url:res.detail_url,
            export_url: res.export_url, history_url: res.history_url,
          disabled_fields_url: res.disabled_fields_url,
          disabled_action_panel_east: res.disabled_action_panel_east || [],
          table_id: "id_grid_" + model_name, table_elem: "#id_grid_" + model_name,
          toolbar_id: "#" + model_name + "_toolbar", fluid_container: "#" + model_name + "_fluid",
          grid_opts: res['grid_opts'], actions: res['action_choices'],
          all_perms: res['all_perms'], init_disabled_fields: res['disabled_fields']
        };

      
var cols = data_grid_opts['grid_opts']['cols'][0];
for(i=0;i<cols.length;i++){
  if(cols[i]['field']=='color_setting'){
      cols[i]['templet'] = function(obj){
          if(obj.color_setting!=null&&obj.color_setting!='-'){
              return '<div class="box" style="background-color: '+ obj.color_setting + ';height: 100%;width: 30px"></div>'
          }else{return ''}
      }
  }
}

      $('#tab_' + model_name).dataGrid(data_grid_opts);
      
      
    }, error: function (msg) {
      console.error(msg);
    }
  });

});
