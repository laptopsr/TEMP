<?php

echo '
<?xml version="1.0" encoding="ISO-8859-15"?>
<?xml-stylesheet type="text/xsl" href="Finvoice.xsl"?>
<Finvoice Version="1.1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="Finvoice.xsd">

<SellerPartyDetails>
<SellerPartyIdentifier>0123456-7</SellerPartyIdentifier>
<SellerPartyIdentifierUrlText>http://www.ytj.fi/Yrity2.asp?yavain=100834</SellerPartyIdentifierUrlText>
<SellerOrganisationName>MALLI/Pullin Musiikki Oy</SellerOrganisationName>
<SellerOrganisationTaxCode>0123456-7</SellerOrganisationTaxCode>
<SellerOrganisationTaxCodeUrlText>http://www.ytj.fi/Yrity2.asp?yavain=100834</SellerOrganisationTaxCodeUrlText>
<SellerPostalAddressDetails>
<SellerStreetName>Haapatie 7</SellerStreetName>
<SellerTownName>Helsinki</SellerTownName>
<SellerPostCodeIdentifier>00100</SellerPostCodeIdentifier>
<CountryCode>FI</CountryCode>
<CountryName>FINLAND</CountryName>
<SellerPostOfficeBoxIdentifier>PL 302</SellerPostOfficeBoxIdentifier>
</SellerPostalAddressDetails>
</SellerPartyDetails>
<SellerContactPersonName>Hanna Paananen</SellerContactPersonName>
<SellerCommunicationDetails>
<SellerPhoneNumberIdentifier>050-5432659</SellerPhoneNumberIdentifier>
<SellerEmailaddressIdentifier>hanna.paananen@pullinmusiikki.fi</SellerEmailaddressIdentifier>
</SellerCommunicationDetails>
<SellerInformationDetails>
<SellerHomeTownName>Helsinki</SellerHomeTownName>
<SellerVatRegistrationText>Alv.Rek</SellerVatRegistrationText>
<SellerVatRegistrationDate Format="CCYYMMDD">19990321</SellerVatRegistrationDate>
<SellerPhoneNumber>(09) 542 1222</SellerPhoneNumber>
<SellerFaxNumber>(09) 542 1222</SellerFaxNumber>
<SellerCommonEmailaddressIdentifier>palaute@pullinmusiikki.fi</SellerCommonEmailaddressIdentifier>
<SellerWebaddressIdentifier>www.pullinmusiikki.fi</SellerWebaddressIdentifier>
<SellerAccountDetails>
<SellerAccountID IdentificationSchemeName="IBAN">FI1234567890123456</SellerAccountID>
<SellerBic IdentificationSchemeName="BIC">OKOYFIHH</SellerBic>
</SellerAccountDetails>
<SellerAccountDetails>
<SellerAccountID IdentificationSchemeName="IBAN">FI1234567890123456</SellerAccountID>
<SellerBic IdentificationSchemeName="BIC">NDEAFIHH</SellerBic>
</SellerAccountDetails>
</SellerInformationDetails>
<BuyerPartyDetails>
<BuyerPartyIdentifier>CL12221</BuyerPartyIdentifier>
<BuyerOrganisationName>Tanssiorkesteri Sensorit</BuyerOrganisationName>
<BuyerPostalAddressDetails>
<BuyerStreetName>Haapatie 1</BuyerStreetName>
<BuyerTownName>Helsinki</BuyerTownName>
<BuyerPostCodeIdentifier>00211</BuyerPostCodeIdentifier>
<CountryCode/>
<CountryName/>
<BuyerPostOfficeBoxIdentifier/>
</BuyerPostalAddressDetails>
</BuyerPartyDetails>
<BuyerContactPersonName>Maija Vikkunen</BuyerContactPersonName>
<BuyerCommunicationDetails>
<BuyerPhoneNumberIdentifier>(09) 542 1222</BuyerPhoneNumberIdentifier>
<BuyerEmailaddressIdentifier>maija.vilkkunen@kolumbus.fi</BuyerEmailaddressIdentifier>
</BuyerCommunicationDetails>
<InvoiceDetails>
<InvoiceTypeCode>INV01</InvoiceTypeCode>
<InvoiceTypeText>LASKU</InvoiceTypeText>
<OriginCode>Origin</OriginCode>
<InvoiceNumber>1/2003</InvoiceNumber>
<InvoiceDate Format="CCYYMMDD">20030612</InvoiceDate>
<SellerReferenceIdentifier>212</SellerReferenceIdentifier>
<SellerReferenceIdentifierUrlText>http://www.pankkiyhdistys.fi/verkkolasku/nettitilasto.pdf</SellerReferenceIdentifierUrlText>
<OrderIdentifier>TI0988</OrderIdentifier>
<OrderIdentifierUrlText>http://www.pankkiyhdistys.fi/verkkolasku/nettitilasto.pdf</OrderIdentifierUrlText>
<InvoiceTotalVatExcludedAmount AmountCurrencyIdentifier="EUR">1711,32</InvoiceTotalVatExcludedAmount>
<InvoiceTotalVatAmount AmountCurrencyIdentifier="EUR">482,68</InvoiceTotalVatAmount>
<InvoiceTotalVatIncludedAmount AmountCurrencyIdentifier="EUR">2194,00</InvoiceTotalVatIncludedAmount>
<ShortProposedAccountIdentifier>9922</ShortProposedAccountIdentifier>
<NormalProposedAccountIdentifier>8822</NormalProposedAccountIdentifier>
<AccountDimensionText>4500</AccountDimensionText>
<VatSpecificationDetails>
<VatBaseAmount AmountCurrencyIdentifier="EUR">2194,00</VatBaseAmount>
<VatRatePercent>22</VatRatePercent>
<VatRateAmount AmountCurrencyIdentifier="EUR">482,68</VatRateAmount>
</VatSpecificationDetails>
<InvoiceFreeText>Meidän kanssamme kannattaa tehdä kauppaa.</InvoiceFreeText>
<PaymentTermsDetails>
<PaymentTermsFreeText>14 päivää netto</PaymentTermsFreeText>
<PaymentOverDueFineDetails>
<PaymentOverDueFineFreeText>Yliaikakorko 16%</PaymentOverDueFineFreeText>
<PaymentOverDueFinePercent>16</PaymentOverDueFinePercent>
</PaymentOverDueFineDetails>
</PaymentTermsDetails>
</InvoiceDetails>
<PaymentStatusDetails>
<PaymentStatusCode>NOTPAID</PaymentStatusCode>
</PaymentStatusDetails>
<VirtualBankBarcode>250003210002229000122000000000000000862074102062800009</VirtualBankBarcode>
<InvoiceRow>
<ArticleIdentifier>161046</ArticleIdentifier>
<ArticleName>Yamaha TRB Bass</ArticleName>
<ArticleInfoUrlText>http://www.netzmarkt.de/thomann/artikel-161046.html</ArticleInfoUrlText>
<BuyerArticleIdentifier>1232321232332</BuyerArticleIdentifier>
<DeliveredQuantity QuantityUnitCode="Kpl">1</DeliveredQuantity>
<OrderedQuantity QuantityUnitCode="Kpl">1</OrderedQuantity>
<UnitPriceAmount AmountCurrencyIdentifier="EUR" UnitPriceUnitCode="e/kpl">2089,00</UnitPriceAmount>
<RowIdentifier>221</RowIdentifier>
<RowIdentifierUrlText>http://www.pankkiyhdistys.fi/verkkolasku/nettitilasto.pdf</RowIdentifierUrlText>
<RowIdentifierDate Format="CCYYMMDD">20030611</RowIdentifierDate>
<RowDeliveryDate Format="CCYYMMDD">20030615</RowDeliveryDate>
<RowShortProposedAccountIdentifier>9922</RowShortProposedAccountIdentifier>
<RowNormalProposedAccountIdentifier>8822</RowNormalProposedAccountIdentifier>
<RowAccountDimensionText>4500</RowAccountDimensionText>
<RowFreeText>Kielet kuuluu hintaan</RowFreeText>
<RowDiscountPercent>0</RowDiscountPercent>
<RowVatRatePercent>22</RowVatRatePercent>
<RowVatAmount AmountCurrencyIdentifier="EUR">458,88</RowVatAmount>
<RowVatExcludedAmount AmountCurrencyIdentifier="EUR">1630,12</RowVatExcludedAmount>
<RowAmount AmountCurrencyIdentifier="EUR">2089,00</RowAmount>
</InvoiceRow>
<InvoiceRow>
<ArticleIdentifier>161047</ArticleIdentifier>
<ArticleName>Toimituskulut</ArticleName>
<BuyerArticleIdentifier>1232321232332</BuyerArticleIdentifier>
<DeliveredQuantity QuantityUnitCode="Kpl">1</DeliveredQuantity>
<OrderedQuantity QuantityUnitCode="Kpl">1</OrderedQuantity>
<UnitPriceAmount AmountCurrencyIdentifier="EUR" UnitPriceUnitCode="e/kpl">10,00</UnitPriceAmount>
<RowIdentifier>221</RowIdentifier>
<RowIdentifierUrlText>http://www.pankkiyhdistys.fi/verkkolasku/nettitilasto.pdf</RowIdentifierUrlText>
<RowIdentifierDate Format="CCYYMMDD">20030611</RowIdentifierDate>
<RowDeliveryDate Format="CCYYMMDD">20030615</RowDeliveryDate>
<RowShortProposedAccountIdentifier>9922</RowShortProposedAccountIdentifier>
<RowNormalProposedAccountIdentifier>8822</RowNormalProposedAccountIdentifier>
<RowAccountDimensionText>4500</RowAccountDimensionText>
<RowDiscountPercent>0</RowDiscountPercent>
<RowVatRatePercent>22</RowVatRatePercent>
<RowVatAmount AmountCurrencyIdentifier="EUR">2,20</RowVatAmount>
<RowVatExcludedAmount AmountCurrencyIdentifier="EUR">7,80</RowVatExcludedAmount>
<RowAmount AmountCurrencyIdentifier="EUR">10,00</RowAmount>
</InvoiceRow>
<InvoiceRow>
<ArticleIdentifier>105768</ArticleIdentifier>
<ArticleName>Shure 57</ArticleName>
<ArticleInfoUrlText>http://www.netzmarkt.de/thomann/artikel-105768.html</ArticleInfoUrlText>
<BuyerArticleIdentifier>1232321232334</BuyerArticleIdentifier>
<DeliveredQuantity QuantityUnitCode="Kpl">1</DeliveredQuantity>
<OrderedQuantity QuantityUnitCode="Kpl">1</OrderedQuantity>
<UnitPriceAmount AmountCurrencyIdentifier="EUR" UnitPriceUnitCode="e/kpl">85,00</UnitPriceAmount>
<RowIdentifier>222</RowIdentifier>
<RowIdentifierDate Format="CCYYMMDD">20030611</RowIdentifierDate>
<RowDeliveryDate Format="CCYYMMDD">20030615</RowDeliveryDate>
<RowShortProposedAccountIdentifier>9922</RowShortProposedAccountIdentifier>
<RowNormalProposedAccountIdentifier>8822</RowNormalProposedAccountIdentifier>
<RowAccountDimensionText>4500</RowAccountDimensionText>
<RowFreeText> + mikkipiuha</RowFreeText>
<RowDiscountPercent>0</RowDiscountPercent>
<RowVatRatePercent>22</RowVatRatePercent>
<RowVatAmount AmountCurrencyIdentifier="EUR">18,70</RowVatAmount>
<RowVatExcludedAmount AmountCurrencyIdentifier="EUR">66,30</RowVatExcludedAmount>
<RowAmount AmountCurrencyIdentifier="EUR">85,00</RowAmount>
</InvoiceRow>
<InvoiceRow>
<ArticleIdentifier>161047</ArticleIdentifier>
<ArticleName>Toimituskulut</ArticleName>
<DeliveredQuantity QuantityUnitCode="Kpl">1</DeliveredQuantity>
<OrderedQuantity QuantityUnitCode="Kpl">1</OrderedQuantity>
<UnitPriceAmount AmountCurrencyIdentifier="EUR" UnitPriceUnitCode="e/kpl">10,00</UnitPriceAmount>
<RowIdentifier>222</RowIdentifier>
<RowIdentifierUrlText>http://www.pankkiyhdistys.fi/verkkolasku/nettitilasto.pdf</RowIdentifierUrlText>
<RowIdentifierDate Format="CCYYMMDD">20030611</RowIdentifierDate>
<RowDeliveryDate Format="CCYYMMDD">20030615</RowDeliveryDate>
<RowShortProposedAccountIdentifier>9922</RowShortProposedAccountIdentifier>
<RowNormalProposedAccountIdentifier>8822</RowNormalProposedAccountIdentifier>
<RowAccountDimensionText>4500</RowAccountDimensionText>
<RowDiscountPercent>0</RowDiscountPercent>
<RowVatRatePercent>22</RowVatRatePercent>
<RowVatAmount AmountCurrencyIdentifier="EUR">2,20</RowVatAmount>
<RowVatExcludedAmount AmountCurrencyIdentifier="EUR">7,80</RowVatExcludedAmount>
<RowAmount AmountCurrencyIdentifier="EUR">10,00</RowAmount>
</InvoiceRow>
<EpiDetails>
<EpiIdentificationDetails>
<EpiDate Format="CCYYMMDD">20020612</EpiDate>
<EpiReference>8620742</EpiReference>
</EpiIdentificationDetails>
<EpiPartyDetails>
<EpiBfiPartyDetails>
<EpiBfiIdentifier IdentificationSchemeName="BIC">OKOYFIHH</EpiBfiIdentifier>
</EpiBfiPartyDetails>
<EpiBeneficiaryPartyDetails>
<EpiNameAddressDetails>Pullin Musiikki Oy</EpiNameAddressDetails>
<EpiAccountID IdentificationSchemeName="IBAN">FI1234567890123456</EpiAccountID>
</EpiBeneficiaryPartyDetails>
</EpiPartyDetails>
<EpiPaymentInstructionDetails>
<EpiRemittanceInfoIdentifier IdentificationSchemeName="SPY">8620741</EpiRemittanceInfoIdentifier>
<EpiInstructedAmount AmountCurrencyIdentifier="EUR">2194,00</EpiInstructedAmount>
<EpiCharge ChargeOption="SHA">SHA</EpiCharge>
<EpiDateOptionDate Format="CCYYMMDD">20030628</EpiDateOptionDate>
</EpiPaymentInstructionDetails>
</EpiDetails>
<InvoiceUrlNameText>Uusimmat tarjouksemme</InvoiceUrlNameText>
<InvoiceUrlText>www.netzmarkt.de/thomannn/thoiw3_hotdeals.html</InvoiceUrlText>
</Finvoice>';

?>
