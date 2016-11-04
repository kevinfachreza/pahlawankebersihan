<div id="modal1" class="modal" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 231.386px;">
    <div class="modal-content">
      <h4 class="center">PAHLAWAN KEBERSIHAN</h4>
      <div class="container row center">
        
        <div class="col s12 m12 l12">
             <h5><i class="material-icons small" style="padding-top:10px;">phone</i> 082257927045</h5>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a class="modal-action modal-close waves-effect waves-blue btn-flat ">OK</a>
    </div>
  </div>

<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l4 m4 s12">
        <h6  class="grey-text secondary-title" style="margin-bottom:5%;">Hubungi Kami:</h6>
        <div class="row">
          <div class="col s3">
            <a href="https://www.facebook.com/profile.php?id=100010233344667" target="_blank" class="waves-effect waves-light modal-trigger"><img width=40px  id="fb" style="background:grey;" onmouseover="hover('fb')" onmouseleave="out('fb')" src="<?php echo base_url();?>assets/img/logo/facebook.png"></a>
          </div>
          <div class="col s3">
            <a href="https://www.instagram.com/jasabersihkos_rumah/"  target="_blank" class="waves-effect waves-light modal-trigger"><img width=40px id="ig" style="background:grey;" onmouseover="hover('ig')" onmouseleave="out('ig')" src="<?php echo base_url();?>assets/img/logo/instagram.png"></a>
          </div>
          <div class="col s3">
            <a href="#modal1" class="waves-effect waves-light modal-trigger"><img width=40px id="wa" style="background:grey;" onmouseover="hover('wa')" onmouseleave="out('wa')" src="<?php echo base_url();?>assets/img/logo/whatsapp.png"></a>
          </div>
          <div class="col s3">
            <a href="https://line.me/ti/p/%40ago0076z" target="_blank"  class="waves-effect waves-light modal-trigger"><img width=40px id="ln" style="background:grey;" onmouseover="hover('ln')" onmouseleave="out('ln')" src="<?php echo base_url();?>assets/img/logo/line.png"></a>
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

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/flickity.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
                  $('.modal-trigger').leanModal({
                    dismissible: true,
                    opacity: .2,
                    in_duration: 300,
                    out_duration: 200
                  });
                  $('#modal1').openModal();
                  $('#modal1').closeModal();
                })
      </script>