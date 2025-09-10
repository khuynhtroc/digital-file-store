<template>
  <div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Admin Dashboard</h2>
    <div class="grid grid-cols-4 gap-4 mb-4">
      <div class="card p-4">17,398,000 đ<br/><small>Doanh thu</small></div>
      <div class="card p-4">95<br/><small>Đơn</small></div>
      <div class="card p-4">-2,100,000 đ<br/><small>Giảm giá</small></div>
      <div class="card p-4">183,137 đ<br/><small>Trung bình/Đơn</small></div>
    </div>
    <div class="grid grid-cols-3 gap-6">
      <div class="col-span-2 card p-4">Biểu đồ doanh thu (placeholder)</div>
      <div class="card p-4">Top sản phẩm bán chạy</div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AdminDashboard',
  data(){return {}}
}
</script>

<style>
.card{background:#fff;border-radius:10px;box-shadow:0 2px 6px rgba(0,0,0,0.06)}
</style>
