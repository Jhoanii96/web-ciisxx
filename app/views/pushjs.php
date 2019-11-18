
<?php
/* 
    
    AUTOR DE PROGRAMACIÓN Y DISEÑO DE LA PAGINA WEB: 
	JHON ALVARADO ACHATA
	
*/
?>

<script src="https://js.pusher.com/5.0/pusher.min.js"></script><script src="/2019/src/js/push.min.js"></script><script>Pusher.logToConsole=!0;var pusher=new Pusher("b2fe8e2fa5b2da11752d",{cluster:"mt1",forceTLS:!0}),channel=pusher.subscribe("my-channel");channel.bind("my-event",function(n){if("new_user"==n.admin){$.ajax({url:"<?=FOLDER_PATH?>/notify/notifications",success:function(n){$("#notifications").html(n)}}),Push.create("CIIS Tacna notificaciones",{body:n.name,icon:"https://scontent.faqp2-1.fna.fbcdn.net/v/t1.0-9/49213040_2150474188378498_2669784385959493632_n.png?_nc_cat=110&_nc_oc=AQkMB69MW-LlEG_rEIHNBx-4S5yJhoOHjOZgrP5-GUiLGHr3rXK2xHldapz4HnQW6L8&_nc_ht=scontent.faqp2-1.fna&oh=c189ef56bad43f5150a4aad80b861546&oe=5E2A1AE9",timeout:6e4,onClick:function(){window.open("<?=FOLDER_PATH?>/admin","_blank"),this.close()}});var e=new Audio("<?=FOLDER_PATH?>/src/assets/media/sound/notification.mp3"),o=e.play();o&&o.catch(function(n){console.error(n)})}})</script>