<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l8 s12">
        <h5  class="grey-text" >Pahlawan Kebersihan</h5>
        <p  class="grey-text text-darken-1" >You can use rows and columns here to organize your footer content. Bla bla bla bla bla bla bla. Begini, begitu lalala.</p>
      </div>
      <div class="col l4 s4">
        <h5  class="grey-text" >Hubungi Kami:</h5>
        <div class="row">
          <div class="col s3">
            <a href="#f1"><img width=40px  id="fb" style="background:grey;" onmouseover="hover('fb')" onmouseleave="out('fb')" src="<?php echo base_url();?>assets/img/logo/facebook.png"></a>
          </div>
          <div class="col s3">
            <a href="#f2"><img width=40px id="ig" style="background:grey;" onmouseover="hover('ig')" onmouseleave="out('ig')" src="<?php echo base_url();?>assets/img/logo/instagram.png"></a>
          </div>
          <div class="col s3">
            <a href="#f3"><img width=40px id="wa" style="background:grey;" onmouseover="hover('wa')" onmouseleave="out('wa')" src="<?php echo base_url();?>assets/img/logo/whatsapp.png"></a>
          </div>
          <div class="col s3">
            <a href="#f4"><img width=40px id="ln" style="background:grey;" onmouseover="hover('ln')" onmouseleave="out('ln')" src="<?php echo base_url();?>assets/img/logo/line.png"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</footer>


<script type="text/javascript">
  function hover(id) {
    document.getElementById(id).style.background = "#e0e0e0";
  }

  function out(id) {
    document.getElementById(id).style.background = "grey";
  }

</script>