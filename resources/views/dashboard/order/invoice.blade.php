
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            * {
                font-size: 12px;
                font-family: 'Times New Roman';
            }

            td,
            th,
            tr,
            table {
                border-top: 1px solid black;
                border-collapse: collapse;
            }

            td.description,
            th.description {
                width: 75px;
                max-width: 75px;
            }

            td.quantity,
            th.quantity {
                width: 40px;
                max-width: 40px;
                word-break: break-all;
            }

            td.price,
            th.price {
                width: 40px;
                max-width: 40px;
                word-break: break-all;
            }

            .centered {
                text-align: center;
                align-content: center;
            }

            .ticket {
                width: 155px;
                max-width: 155px;
            }

            img {
                max-width: inherit;
                width: inherit;
            }

            @media  print {
                .hidden-print,
                .hidden-print * {
                    display: none !important;
                }
            }
        </style>
        <title>ORDER - {{ $order->order_code }}</title>
    </head>

    <body>
        <div class="ticket">
            <p class="centered">{{ $systems->system_name }}
            <br>
            {{ $systems->address }}
            </p>
            <table>
                <thead>
                    <tr>
                        <th class="quantity">Berat</th>
                        <th class="description">Paket</th>
                        <th class="price">Rp.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="quantity">{{ $order->weight }}</td>
                        <td class="description">{{ $order->packet->name }}</td>
                        <td class="price">{{ number_format($order->packet->price) }}</td>
                    </tr>
                    <tr>
                        <td class="quantity"></td>
                        <td class="description">TOTAL</td>
                        <td class="price">{{ number_format($order->price) }}</td>
                    </tr>
                </tbody>
            </table>
            <p class="centered">Terima kasih!
                <br>Starter</p>
        </div>
        <button id="btnPrint" class="hidden-print">Print</button>
        <script>
            const $btnPrint = document.querySelector("#btnPrint");
            $btnPrint.addEventListener("click", () => {
                window.print();
            });
        </script>
    </body>

</html>
