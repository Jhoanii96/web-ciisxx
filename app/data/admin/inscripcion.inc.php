<?php

/* 
    
    AUTOR DE PROGRAMACIÓN PHP: 
    LEANDRO ANDRÉ RAMOS VALDEZ
	
*/

class inscripcion
{

	private $iduser;
	private $date_inscription;
	private $id_organizer;
	private $id_activity;
	private $link_photo_voucher;
	private $type_inscription;
	private $payment_type;
	private $state_preinscription;
	private $prepayment;
	private $payment_inscription;

	function __construct($iduser, $date_inscription, $id_organizer, $id_activity, $link_photo_voucher, $type_inscription, $payment_type, $state_preinscription, $prepayment, $payment_inscription)
	{
		$this->iduser				= $iduser;
		$this->date_inscription		= $date_inscription;
		$this->id_organizer			= $id_organizer;
		$this->id_activity			= $id_activity;
		$this->link_photo_voucher	= $link_photo_voucher;
		$this->type_inscription	    = $type_inscription;
		$this->payment_type		    = $payment_type;
		$this->state_preinscription	= $state_preinscription;
		$this->prepayment			= $prepayment;
		$this->payment_inscription	= $payment_inscription;
	}

	function getIdUser()
	{
		return $this->iduser;
	}
	function getDateIncription()
	{
		return $this->date_inscription;
	}
	function getIdOrganizer()
	{
		return $this->id_organizer;
	}
	function getIdActivity()
	{
		return $this->id_activity;
	}
	function getLinkPhotoVoucher()
	{
		return $this->link_photo_voucher;
	}
	function getTypeInscription()
	{
		return $this->type_inscription;
	}
	function getPaymentType()
	{
		return $this->payment_type;
	}
	function getStatePreinscription()
	{
		return $this->state_preinscription;
	}
	function getPrepayment()
	{
		return $this->prepayment;
	}
	function getPaymentInscription()
	{
		return $this->payment_inscription;
	}
	function setIdUser($iduser)
	{
		$this->iduser = $iduser;
	}
	function setDateIncription($date_inscription)
	{
		$this->date_inscription = $date_inscription;
	}
	function setIdOrganizer($id_organizer)
	{
		$this->id_organizer = $id_organizer;
	}
	function setIdActivity($id_activity)
	{
		$this->id_activity = $id_activity;
	}
	function setLinkPhotoVoucher($link_photo_voucher)
	{
		$this->link_photo_voucher = $link_photo_voucher;
	}
	function setTypeInscription($type_inscription)
	{
		$this->type_inscription = $type_inscription;
	}
	function setPaymentType($payment_type)
	{
		$this->payment_type = $payment_type;
	}
	function setStatePreinscription($state_preinscription)
	{
		$this->state_preinscription = $state_preinscription;
	}
	function setPrepayment($prepayment)
	{
		$this->prepayment = $prepayment;
	}
	function setPaymentInscription($payment_inscription)
	{
		$this->payment_inscription = $payment_inscription;
	}
}
