<?php

$status = opcache_get_status();

?>

# TYPE zendserver_opcache_memory_usage_used gauge
zendserver_opcache_memory_usage_used <?php echo $status['memory_usage']['used_memory']; ?> 
# TYPE zendserver_opcache_memory_usage_free gauge
zendserver_opcache_memory_usage_free <?php echo $status['memory_usage']['free_memory']; ?> 
# TYPE zendserver_opcache_memory_usage_wasted gauge
zendserver_opcache_memory_usage_wasted <?php echo $status['memory_usage']['wasted_memory']; ?> 
# TYPE zendserver_opcache_restarts counter
zendserver_opcache_restarts{type="oom"} <?php echo $status['opcache_statistics']['oom_restarts']; ?> 
zendserver_opcache_restarts{type="hash"} <?php echo $status['opcache_statistics']['hash_restarts']; ?> 
zendserver_opcache_restarts{type="manual"} <?php echo $status['opcache_statistics']['manual_restarts']; ?> 
# TYPE zendserver_opcache_statistics_misses counter
zendserver_opcache_misses <?php echo $status['opcache_statistics']['misses']; ?> 
# TYPE zendserver_opcache_hits counter
zendserver_opcache_hits <?php echo $status['opcache_statistics']['hits']; ?> 
# TYPE zendserver_opcache_hit_rate gauge
zendserver_opcache_hit_rate <?php echo $status['opcache_statistics']['opcache_hit_rate']; ?> 