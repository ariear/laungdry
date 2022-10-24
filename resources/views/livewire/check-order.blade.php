<article class="parent-form-check-message">
    <div class="form-check-message">
        <h2>Cek Pesanan</h2>
        <form wire:submit.prevent="check">
            <div class="wrap-input-check-message">
                <div class="input-check-message">
                    <i class="fa bi bi-journal-text"></i>
                    <input type="text" wire:model="code_order" placeholder="No. Invoice">
                </div>
            </div>
            <button type="submit">Cek</button>
        </form>
    </div>
    @if ($isCodeOrder)
    <table class="table-check">
        <tr>
            <td>No.Invoice</td>
            <td>Status</td>
        </tr>
        <tr>
            <td>{{ $order->order_code }}</td>
            <td>{{ $order->status }}</td>
        </tr>
    </table>
    @elseif ($isNotFound)
    <p class="not-found-invoice">No Invoice tidak ditemukan</p>
    @endif
</article>
