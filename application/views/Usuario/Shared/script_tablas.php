<?php
	if($this->session->userdata("perfil") == 1)
	{
?>
		<script type="text/javascript" src="<?php base_url(); ?>../../resources/js/consultar_ofertas.js"></script>
		<script type="text/javascript" src="<?php base_url(); ?>../../resources/js/consultar_ofertas_inactivas.js"></script>
		
<?php
	}
	else if($this->session->userdata("perfil") > 1 || $this->session->userdata("perfil") == NULL)
	{
?>
	<script type="text/javascript" src="<?php base_url(); ?>../../resources/js/consultar_ofertas_user.js"></script>
<?php
	}
?>