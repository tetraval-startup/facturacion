<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "../plugins/dompdf/vendor/autoload.php";
require "../plugins/phpqrcode/qrlib.php";
use Dompdf\Dompdf;
include "documentos_html.php";

class Printpdf {

	public function get_factura($data,$detalleComprobante) {
		/***** FACTURA: DATOS OBLIGATORIOS PARA EL CÓDIGO QR *****/
		/*RUC | TIPO DE DOCUMENTO | SERIE | NUMERO | MTO TOTAL IGV | MTO TOTAL DEL COMPROBANTE | FECHA DE EMISION |TIPO DE DOCUMENTO ADQUIRENTE | NUMERO DE DOCUMENTO ADQUIRENTE |*/
		$text_qr = '2660130746|03|'. $data['serie_comprobante'].'|'.$data['numero_comprobante'].'|'.$data['txt_igv_comprobante'].'|'.$data['txt_total_comprobante'].'|26/10/2018|6|55887744|';
		$ruta_qr = "../archivos_xml_sunat/imgqr/". $data['serie_comprobante']."-".$data['numero_comprobante'].".png";

		QRcode::png($text_qr, $ruta_qr, 'Q',15, 0);
		$html_documentos = new Documentos_html();
		$html = $html_documentos->get_html_factura($data,$ruta_qr,$detalleComprobante);

		define("DOMPDF_ENABLE_REMOTE", true);
        $dompdf = new Dompdf();
		$dompdf->loadHtml($html['html']);
		$dompdf->setPaper('A4');
		$dompdf->render();
		$dompdf->stream("factura_n_". $data['serie_comprobante']."-".$data['numero_comprobante'].".pdf",array("Attachment"=>0));
	}


	public function get_boleta($data,$detalleComprobante) {
		/***** FACTURA: DATOS OBLIGATORIOS PARA EL CÓDIGO QR *****/
		/*RUC | TIPO DE DOCUMENTO | SERIE | NUMERO | MTO TOTAL IGV | MTO TOTAL DEL COMPROBANTE | FECHA DE EMISION |TIPO DE DOCUMENTO ADQUIRENTE | NUMERO DE DOCUMENTO ADQUIRENTE |*/
		$text_qr = '2660130746|03|'. $data['serie_comprobante'].'|'.$data['numero_comprobante'].'|'.$data['txt_igv_comprobante'].'|'.$data['txt_total_comprobante'].'|26/10/2018|6|55887744|';
		$ruta_qr = "../archivos_xml_sunat/imgqr/". $data['serie_comprobante']."-".$data['numero_comprobante'].".png";

		QRcode::png($text_qr, $ruta_qr, 'Q',15, 0);
		$html_documentos = new Documentos_html();
		$html = $html_documentos->get_html_boleta($data,$detalleComprobante);

		define("DOMPDF_ENABLE_REMOTE", true);
        $dompdf = new Dompdf();
		$dompdf->loadHtml($html['html']);
		$dompdf->setPaper('A4');
		$dompdf->render();
		$dompdf->stream("Boleta_n_". $data['serie_comprobante']."-".$data['numero_comprobante'].".pdf",array("Attachment"=>0));
	}
	

	public function get_notacredito($id) {
		$html_documentos = new Documentos_html();
		$html = $html_documentos->get_html_nota_credito('');

		define("DOMPDF_ENABLE_REMOTE", true);
        $dompdf = new Dompdf();
		$dompdf->loadHtml($html['html']);
		$dompdf->setPaper('A4');
		$dompdf->render();
		$dompdf->stream("notacredito_n_".$id.".pdf");
	}

	public function get_notadebito($id) {
		$html_documentos = new Documentos_html();
		$html = $html_documentos->get_html_nota_debito('');

		define("DOMPDF_ENABLE_REMOTE", true);
        $dompdf = new Dompdf();
		$dompdf->loadHtml($html['html']);
		$dompdf->setPaper('A4');
		$dompdf->render();
		$dompdf->stream("notadebito_n_".$id.".pdf");
	}
}
?>