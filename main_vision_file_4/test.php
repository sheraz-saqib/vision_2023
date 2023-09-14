<?php 

echo "Starting\n";

# Create our worker object.
$gmworker= new GearmanWorker();

# Add default server (localhost).

# Register function "reverse" with the server.
$gmworker->addFunction("reverse", "reverse_fn");

# Set the timeout to 5 seconds
$gmworker->setTimeout(5000);

echo "Waiting for job...\n";
while(@$gmworker->work() || $gmworker->returnCode() == GEARMAN_TIMEOUT)
{
  if ($gmworker->returnCode() == GEARMAN_TIMEOUT)
  {
    # Normally one would want to do something useful here ...
    echo "Timeout. Waiting for next job...\n";
    continue;
  }

  if ($gmworker->returnCode() != GEARMAN_SUCCESS)
  {
    echo "return_code: " . $gmworker->returnCode() . "\n";
    break;
  }
}

echo "Done\n";

function reverse_fn($job)
{
  return strrev($job->workload());
}
?>