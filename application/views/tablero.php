<div class="row">
  <!-- begin col-3 -->
  <div class="col-lg-3 col-md-6">
    <div class="widget widget-stats bg-gradient-teal">
      <div class="stats-icon stats-icon-lg"><i class="fas fa-graduation-cap"></i></div>
      <div class="stats-content">
        <div class="stats-title">BENEFICIOS SOLICITADOS</div>
        <div class="stats-number"><?= ( !empty($beneficios) ? count($beneficios) : 0 ); ?></div>
        <!-- <div class="stats-progress progress">
          <div class="progress-bar" style="width: 70.1%;"></div>
        </div> -->
        <div class="stats-desc"></div>
      </div>
    </div>
  </div>
  <!-- end col-3 -->
  <!-- begin col-3 -->
  <!-- <div class="col-lg-3 col-md-6">
    <div class="widget widget-stats bg-gradient-cyan">
      <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
      <div class="stats-content">
        <div class="stats-title">NEW ORDERS</div>
        <div class="stats-number">38,900</div>
        <div class="stats-progress progress">
          <div class="progress-bar" style="width: 76.3%;"></div>
        </div>
        <div class="stats-desc">Better than last week (76.3%)</div>
      </div>
    </div>
  </div> -->
  <!-- end col-3 -->
</div>
