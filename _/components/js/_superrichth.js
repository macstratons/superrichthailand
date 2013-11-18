$(function() {
  
  //highlight the current nav
  $("#home a:contains('HOME')").parent().addClass('active');
  $("#exchange a:contains('EXCHANGE RATE')").parent().addClass('active');
  $("#about a:contains('ABOUT US')").parent().addClass('active');
  $("#contact a:contains('CONTACT')").parent().addClass('active');
  $("#news a:contains('NEWS UPDATE')").parent().addClass('active');
  $("#faq a:contains('FAQ')").parent().addClass('active');

  //activate tooltip
  $('[data-toggle="tooltip"]').tooltip({'placement': 'top'});
  /*$('[data-toggle="popover"]').popover({trigger: 'hover','placement': 'top'});*/
  /*$(".tip").tooltip();*/

  //add administration login popover
  $('#login').popover({ 
      trigger: 'hover','placement': 'top',
      animation: true,
      html : true,
      title: function() {
        return $("#popover-header").html();
      },
      content: function() {
        return $("#popover-form").html();
      }
  });

  //add business hours popover
  $('[data-toggle="popover"]').popover({ 
      trigger: 'hover','placement': 'top',
      html : true,
      title: function() {
        return $("#popover-head").html();
      },
      content: function() {
        return $("#popover-content").html();
      }
  });

  //add morris graph chart
  Morris.Line ({
        element: 'morris-chart-line',
        data: [
          { y: '2006', a: 100, b: 90 },
          { y: '2007', a: 75,  b: 65 },
          { y: '2008', a: 50,  b: 40 },
          { y: '2009', a: 75,  b: 65 },
          { y: '2010', a: 50,  b: 40 },
          { y: '2011', a: 40,  b: 50 },
          { y: '2012', a: 30, b: 42 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B']
  });

  //add morris bar chart
  Morris.Bar({
        element: 'bar-example',
        data: [
          { y: '2006', a: 100, b: 90 },
          { y: '2007', a: 75,  b: 65 },
          { y: '2008', a: 50,  b: 40 },
          { y: '2009', a: 75,  b: 65 },
          { y: '2010', a: 50,  b: 40 },
          { y: '2011', a: 75,  b: 65 },
          { y: '2012', a: 100, b: 90 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B']
  });

}); //jQuery is loaded