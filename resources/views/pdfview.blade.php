<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0 auto;
        }

        /*html {*/
        /*    height: 0;*/
        /*    padding-left: 0in;*/
        /*}*/

        body {
            font-family: 'Nunito Sans', sans-serif;
        }

        html
        {
            height: 100%;
        }

        p {
            font-size: 15px;
            color: grey;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .heading {
            font-weight: bold;
            color: black;
            margin: 10px 0;
        }

        #footer {
            margin: auto;
            width: 100%;
            text-align: center;
            position: absolute;
            bottom: 0;
            /*background-color: red;*/
            height: 40px;
        }

        #main
        {
            width: 100%;
        }

    </style>
</head>

<body>
    <div id="main" style="margin: 0px auto;padding: 0px;">
        
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr style="background-color: #f8fafd;">
                
                <td style="padding-left: 30px;">
                    <h1>Invoice</h1>
                </td>
                
                <td style="padding: 15px 30px 15px 0;text-align: right;">
                    <p class="heading">Invoice Number:</p>
                    <p>INV-15</p>
                    <p class="heading">Issued:</p>
                    <p>02 Mar, 2022</p>
                </td>

            </tr>
        </table>

        <table style="margin: 30px 0;" width="100%" cellspacing="0" cellpadding="5">

            <tr>
                <td style="width: 50%;padding: 0;">
                    <table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <td style="padding-left: 30px;line-height: 1.7;">
                                <p class="heading">Bill To:</p>
                                <p>Dmitrijs Vitjazevs</p>
                                <p>dv@corgee.co</p>
                                <p>OLorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
                                <p>London</p>
                                <p>302020</p>
                                <br />
                                <p class="heading">Tax Number:</p>
                                <p>12345678</p>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width: 50%;padding: 0;">
                    <table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <td style="padding-right: 30px;text-align: right;line-height: 1.7;">
                                <p class="heading">Bill From:</p>
                                <p>Kamal</p>
                                <p>kamal@corgee.co</p>
                                <p>Orchard rd</p>
                                <p>London</p>
                                <p>302020</p>

                                <br />
                                <p class="heading">Tax Number:</p>
                                <p>12345678</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>

        <table width="100%" cellspacing="0" cellpadding="5">

            <tbody>

            <tr style="background-color: #f8fafd; ">

                <td style="padding-left: 30px;width: 60%;">
                    <p class="heading">Item</p>
                </td>
                <td>
                    <p class="heading">Cost</p>
                </td>
                <td>
                    <p class="heading">QTY</p>

                <td style="text-align: right;padding-right: 30px;">
                    <p class="heading">Price</p>
                </td>

            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>

            <tr>

                <td style="padding-left: 30px;">
                    <strong>demo</strong>
                </td>
                <td>
                    ¢ 2,000.00
                </td>
                <td>
                    10
                </td>
                <td style="text-align: right;padding-right: 30px;">
                    ¢ 2,000.00
                </td>

            </tr>
            <tr>

                <td style="padding-left: 30px;">
                    <strong>demo</strong>
                </td>
                <td>
                    ¢ 2,000.00
                </td>
                <td>
                    10
                </td>
                <td style="text-align: right;padding-right: 30px;">
                    ¢ 2,000.00
                </td>

            </tr>

            <tr>

                <td style="padding: 0;">&nbsp;</td>
                <td style="border-bottom: 1px solid #000;padding: 0;">&nbsp;</td>
                <td style="border-bottom: 1px solid #000;padding: 0;">&nbsp;</td>
                <td style="border-bottom: 1px solid #000;padding: 0;">&nbsp;</td>

            </tr>

            <tr>

                <td>&nbsp;</td>
                <td style="padding: 10px 0;" colspan="2">
                    Subtotal
                </td>
                <td style="text-align: right;padding: 10px 30px 10px 0;">
                    ¢ 2,000.00
                </td>

            </tr>

            <tr>

                <td>&nbsp;</td>
                <td style="padding: 10px 0;" colspan="2">
                    VAT (50%)
                </td>
                <td style="text-align: right;padding: 10px 30px 10px 0;">
                    ¢ 1,000.00
                </td>

            </tr>

            <tr>

                <td>&nbsp;</td>
                <td style="padding: 10px 0;border-bottom: 1px solid #000;" colspan="2">
                    Withholding tax (50%)
                </td>
                <td style="text-align: right;padding: 10px 30px 10px 0;border-bottom: 1px solid #000;">
                    -¢ 1,000.00
                </td>

            </tr>

            <tr>

                <td>&nbsp;</td>
                <td style="padding: 10px 0;" colspan="2">
                    <strong>Invoice Total</strong>
                </td>
                <td style="text-align: right;padding: 10px 30px 10px 0;">
                    <strong>¢ 2,000.00</strong>
                </td>

            </tr>

            <tr>

                <td>&nbsp;</td>
                <td style="padding: 10px 0;" colspan="2">
                    <strong>Due</strong>
                </td>
                <td style="text-align: right;padding: 10px 30px 10px 0;">
                    02 Mar, 2022
                </td>

            </tr>

            </tbody>

        </table>

        <table width="100%" cellspacing="0" cellpadding="25" style="margin-top:30px;">
            <tr style="background-color: #fff;">
                <td style="padding-top: 0;padding-bottom: 0;">
                    <table width="100%" cellspacing="0" cellpadding="25">
                        <tr>
                            <td>
                                <p class="heading">Payment Details:</p>
                                <p>jais</p>
                                <p>12345678</p>
                                <p>Test notes</p>
                                <p>test nites</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div id="footer">Created In <a href="https://corgee.co">Corgee</a></div>
    </div>
</body>

</html>