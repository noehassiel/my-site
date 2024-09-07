<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Creagia\LaravelSignPad\Concerns\RequiresSignature;
use Creagia\LaravelSignPad\Contracts\CanBeSigned;

use Creagia\LaravelSignPad\Contracts\ShouldGenerateSignatureDocument;
use Creagia\LaravelSignPad\Templates\BladeDocumentTemplate;
use Creagia\LaravelSignPad\Templates\PdfDocumentTemplate;
use Creagia\LaravelSignPad\SignatureDocumentTemplate;
use Creagia\LaravelSignPad\SignaturePosition;

class Quote extends Model implements CanBeSigned
{
    use HasFactory;

    use RequiresSignature;


    public function projects()
    {
        return $this->hasMany(QuoteProject::class);
    }

    public function client()
    {
        return $this->hasOne(Client::class, 'id', 'client_id');
    }

    public function getSignatureDocumentTemplate(): SignatureDocumentTemplate
    {
        return new SignatureDocumentTemplate(
            outputPdfPrefix: 'document', // optional
            // template: new BladeDocumentTemplate('pdf/my-pdf-blade-template'), // Uncomment for Blade template
            // template: new PdfDocumentTemplate(storage_path('pdf/template.pdf')), // Uncomment for PDF template
            signaturePositions: [
                new SignaturePosition(
                    signaturePage: 1,
                    signatureX: 20,
                    signatureY: 25,
                ),
                new SignaturePosition(
                    signaturePage: 2,
                    signatureX: 25,
                    signatureY: 50,
                ),
            ]
        );
    }
}
