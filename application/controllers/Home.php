<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
		$this->load->model('M_Datos');
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
	}

	public function index()
	{
		$this->load->view('v_home');
	}

	function register(){
		$data['error'] = EXIT_ERROR;
      	$data['msj']   = null;
		try {
			$empresa 		   = $this->input->post('Company');
			$direccion         = $this->input->post('Direccion');
			$name              = $this->input->post('Name');
			$surname 		   = $this->input->post('Surname');
			$cargo 		       = $this->input->post('Position');
			$correo 		   = $this->input->post('Email');
			$telefono	       = $this->input->post('Phone');
			$birthday 	       = $this->input->post('Birthday');
			$deporte	       = $this->input->post('Deporte');
			$server            = $this->input->post('Server');
			$storage           = $this->input->post('Storage');
			$wireless          = $this->input->post('Wireless');
			$hyperconvergencia = $this->input->post('Hyperconvergencia');
			$videovigilancia   = $this->input->post('Videovigilancia');
			$comunicaciones    = $this->input->post('Comunicaciones');
			$cableado          = $this->input->post('Cableado');
			$metalmecanica     = $this->input->post('Metalmecanica');
			$potencia          = $this->input->post('Potencia');
			$computadoras      = $this->input->post('Computadoras');
			$impresion         = $this->input->post('Impresion');
			$software          = $this->input->post('Software');
			$descripcion       = $this->input->post('Description');
			$existe            = $this->M_Datos->existCorreo($correo);
			$fecha             = date('Y-m-d');
			if(count($existe) != 0) {
				$data['msj']   = 'Correo ya registrado';
			}
			else{
				$insertParticipante = array('empresa'           => $empresa,
											'direccion'         => $direccion,
											'nombre'            => $name,
											'apellido'          => $surname,
											'cargo'             => $cargo,
											'email'             => $correo,
											'telefono'          => $telefono,
											'birthday'          => $birthday,
											'deporte'           => $deporte,
											'server'            => $server,
											'storage'           => $storage,
											'wireless'          => $wireless,
											'hyperconvergencia' => $hyperconvergencia,
											'videovigilancia'   => $videovigilancia,
											'comunicaciones'    => $comunicaciones,
											'cableado'          => $cableado,
											'metalmecanica'     => $metalmecanica,
											'potencia'          => $potencia,
											'computadoras'      => $computadoras,
											'impresion'         => $impresion,
											'software'          => $software,
											'descripcion'       => $descripcion,
										   	'fecha'             => $fecha);
				$datoInsert  = $this->M_Datos->insertarDatos($insertParticipante,'contact');
				$this->sendConfirmation($correo);
	          	$data['msj']   = $datoInsert['msj'];
	          	$data['error'] = $datoInsert['error'];
	          }
		} catch(Exception $ex) {
			$data['msj'] = $ex->getMessage();
		}
      	echo json_encode($data);
	}
	function sendConfirmation($correo){
		$data['error'] = EXIT_ERROR;
		$data['msj']   = null;
		try {  
			$this->load->library("email");
			$configGmail = array('protocol'  => 'smtp',
			                     'smtp_host' => 'mail.iradianty.com',
			                     'smtp_port' => 587,
			                     'smtp_user' => 'info@iradianty.com',
			                     'smtp_pass' => 'EduardoBenavides2019!',
			                     'mailtype'  => 'html',
			                     'charset'   => 'utf-8',
			                     'newline'   => "\r\n");    
			$this->email->initialize($configGmail);
			$this->email->from('info@iradianty.com');
			$this->email->to($correo);
			// $this->email->to('jose.minayac15@gmail.com');
			$this->email->subject('Invitación lOGISTICA.');
			$texto = '<!DOCTYPE html>
			                <html>
			                    <body>
			                        <table width="500" cellpadding="0" cellspacing="0" align="center" style="border: solid 1px #ccc;">
			                            <tr>
			                                <td style="background-color: #FFFFFF;width:100%;border-bottom: 1px solid #CCCCCC;">
			                                    <table width="500" cellspacing="0" cellpadding="0" border="0" style="background-color: #FFFFFF;padding: 10px 20px;width: 100%;">
			                                        <tr>
														<td><a href="#"><img src="http://iradianty.com/HPE/events/microsite/Logistica/public/img/logo/logistica.jpg" width="200" alt="alternative text" border="0" style="display: block;"></a></td>
			                                        </tr>
			                                    </table>
			                                </td>
			                            </tr>
			                            <tr>
			                                <td>
			                                    <table width="400" cellspacing="0" cellpadding="0" border="0" align="center" style="padding: 30px 10px">
			                                        <tr>
			                                            <td style="text-align: center;padding: 0;margin: 0;padding-bottom: 10px"><font style="font-family: arial;color: #000000;font-size: 18px;font-weight: 600">Muchas gracias.<br> Su registro ha sido realizado con &eacute;xito.</font></td>
													</tr>
			                                        <tr>
			                                            <td style="text-align: center;"><font style="font-family: arial;color: #757575;font-size: 12px;">&copy;Logistica S.A., 2019</font></td>
			                                        </tr>
			                                    </table>
			                                </td>
			                            </tr>
			                        </table>
			                    </body>
			                </html>';
			$this->email->message($texto);
			$this->email->send();
			$data['error'] = EXIT_SUCCESS;
		}catch (Exception $e){
			$data['msj'] = $e->getMessage();
		}
		return json_encode(array_map('utf8_encode', $data));
	}
}
