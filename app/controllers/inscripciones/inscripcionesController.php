<?php
/* 
    
    AUTOR DE PROGRAMACIÓN PHP: 
    LEANDRO ANDRÉ RAMOS VALDEZ
    
    MODIFICACIONES Y COLABORACIONES:
    JHON ALVARADO ACHATA
	
*/

require ROOT.FOLDER_PATH."/system/libs/Session.php";require ROOT.FOLDER_PATH."/app/models/admin/adminModel.php";require ROOT.FOLDER_PATH."/".DATA."admin/autoload".DATAI."php";require ROOT.FOLDER_PATH.'/vendor/autoload.php';class inscripciones extends Controller{public $model;public $session;public function __construct(){$this->dataPreins=new dataAdmin();}public function index(){$this->view('inscripciones/inscripciones');}public function save(){$firstName=mb_strtoupper($_POST['firstName'],'UTF-8');$lastName=mb_strtoupper($_POST['lastName'],'UTF-8');$dni=$_POST['dni'];$cellphone=$_POST['cellphone'];$email=$_POST['email'];$anio=$_POST['anio'];$country=$_POST['cosa'];$city=$_POST['opt'];$tipo=$_POST['options'];$grade=$_POST['grade'];$institution=$_POST['institution'];$file_name=date("m-d-y").date("h-i-sa").".".basename($_FILES['imageVoucher']['type']);$file_type=$_FILES['imageVoucher']['type'];$file_size=$_FILES['imageVoucher']['size'];$file_tmp=$_FILES['imageVoucher']['tmp_name'];$imagen_destino=ROOT.FOLDER_PATH.'/src/assets/media/vch/';move_uploaded_file($file_tmp,$imagen_destino.$file_name);$imagen_voucher='/2019/src/assets/media/vch/'.$file_name;$encapsuPreIns=new PreInscripcion($firstName,$lastName,$dni,$cellphone,$email,$city,$tipo,$anio,$country,$institution,$grade,$imagen_voucher);$this->dataPreins->guardarPreins($encapsuPreIns);$options=array('cluster'=>'mt1','useTLS'=>true);$pusher=new Pusher\Pusher('b2fe8e2fa5b2da11752d','f78e0803d1a025f8f0e4','882803',$options);$data['admin']='new_user';$data['name']=$firstName.' de la '.$institution.' de la ciudad de '.$city.', se acaba de preinscribir.';$pusher->trigger('my-channel','my-event',$data);sleep(1);echo("<script>location.href = '".FOLDER_PATH."/inscripciones';</script>");}}