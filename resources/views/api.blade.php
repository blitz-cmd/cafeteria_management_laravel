<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  $(document).ready(function(){
    init()

    function init(){
      var url="https://api.covidindiatracker.com/state_data.json"
      var datama=''
      var datamu=''
      var datapu=''
      var datath=''
      var datasa=''
      $.get(url,function(data){

        datama=`
        ${data[0].active}`
        $('#data1').html(datama)
        
        datamu=`
        ${data[0].districtData[1].confirmed}`
        $('#data2').html(datamu)

        datapu=`
        ${data[0].districtData[0].confirmed}`
        $('#data3').html(datapu)

        datath=`
        ${data[0].districtData[2].confirmed}`
        $('#data4').html(datath)

        datasa=`
        ${data[0].districtData[11].confirmed}`
        $('#data5').html(datasa)

      })
    }
  })
</script>