<p class="inventory">
  @if ($product->quantity == 0)
    <span class="green"> <a class="contact-to-order" href="#">Hết hàng</a></span>
  @else
    <span class="green"> <span class="bb">Hàng còn: </span><span class="iv">{{ $product->quantity }}</span> Cái</span>
  @endif
</p>
