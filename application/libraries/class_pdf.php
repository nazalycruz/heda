<?php if (!defined('BASEPATH')) exit('No permitir el acceso directo al script');


require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';


class Class_PDF extends TCPDF{

    function __construct()
    {
        parent::__construct();        
    }

}



class MYPDF extends Class_PDF{
    /*
    MultiCell ($w,
        $h,
        $txt,
        $border = 0,
        $align = 'J',
        $fill = false,
        $ln = 1,
        $x = '',
        $y = '',
        $reseth = true,
        $stretch = 0,
        $ishtml = false,
        $autopadding = true,
        $maxh = 0,
        $valign = 'T',
        $fitcell = false 
    )       

    */

    public function Header()
    {
        //$this->load->helper('url');

		$logo_tecnologicos = 'img/logos/institutos_tecnologicos.png';

		$logo_itsmotul = 'img/logos/itsmotul.jpg';

		$this->SetFont('Helvetica', 'B', 10);
        //Punto de incio
        $x = 16;
        $y = 8;

		$this->SetTextColor(0,0,0);
        $this->SetLineStyle(array('width' => 0.4));
        $this->Multicell(30,22,'',1,'L',false,1,$x,$y);

		$this->Multicell(90,12,'Nombre del formato: Formato de solicitud de Ficha para Examen de Selección',1,'L',false,1,$x+30,$y);
        $this->SetFont('Helvetica', '', 8);
        $this->Multicell(37,4,'Código','LTR','L',false,1,$x+30+90,$y,true,0,false,true,7);
        $this->Multicell(37,4,'SNIT/D-AC-PO-001-04','LRB','L',false,1,$x+30+90,$y+4,true,0,false,true,7);
        $this->Multicell(37,4,'Revisión 4',1,'L',false,1,$x+30+90,$y+4+4);
        $this->SetFont('Helvetica', '', 10);

        $this->Multicell(90,10,'Referencia a la Norma ISO 9001-2008: 7.2.1, 7.2.2, 7.2.3, 7.5.3',1,'L',false,1,$x+30,$y+12);
        $this->SetFont('Helvetica', '', 9);
        $this->Multicell(37,10,'Página '.$this->getAliasNumPage().' de '.$this->getAliasNbPages(),1,'L',false,1,$x+30+90,$y+12,true,0,false,true,10,'C');

        $this->Multicell(25,22,'',1,'L',false,1,$x+30+90+37,$y);
        

        $this->Image($logo_tecnologicos, 19, 13, 24, 12, 'PNG','', 'N', false,'', '', false, false, 0, false, false, false);
        $this->Image($logo_itsmotul, 175, 10, 18, 19, 'JPG','', 'N', false,'', '', false, false, 0, false, false, false);

    }
	

    public function Footer()
    {

        // Position at 15 mm from bottom

		//$estilo = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(222, 222, 222));

		$estilo = array('width' => 1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0,0,0));

        $this->SetY(-15);

        $anchocuadro = 5;

        $this->SetFont('Helvetica', '', 10);
		$this->SetTextColor(0,0,0);

		$this->Line(12,$this->y,195,$this->y,$estilo);	
        $this->ln(1);

        $this->Multicell(40,0,'SNIT-AC-PO-001-04',0,'L',false,0);
        $this->Multicell(80,0,'',0,'L',false,0);
        $this->Multicell(50,0,'Rev. 4',0,'R',false);
    }

}

?>