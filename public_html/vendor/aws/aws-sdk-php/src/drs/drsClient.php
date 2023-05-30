<?php
namespace Aws\drs;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Elastic Disaster Recovery Service** service.
 * @method \Aws\Result createExtendedSourceServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createExtendedSourceServerAsync(array $args = [])
 * @method \Aws\Result createReplicationConfigurationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationConfigurationTemplateAsync(array $args = [])
 * @method \Aws\Result deleteJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobAsync(array $args = [])
 * @method \Aws\Result deleteRecoveryInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRecoveryInstanceAsync(array $args = [])
 * @method \Aws\Result deleteReplicationConfigurationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationConfigurationTemplateAsync(array $args = [])
 * @method \Aws\Result deleteSourceServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSourceServerAsync(array $args = [])
 * @method \Aws\Result describeJobLogItems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobLogItemsAsync(array $args = [])
 * @method \Aws\Result describeJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobsAsync(array $args = [])
 * @method \Aws\Result describeRecoveryInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecoveryInstancesAsync(array $args = [])
 * @method \Aws\Result describeRecoverySnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecoverySnapshotsAsync(array $args = [])
 * @method \Aws\Result describeReplicationConfigurationTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationConfigurationTemplatesAsync(array $args = [])
 * @method \Aws\Result describeSourceServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSourceServersAsync(array $args = [])
 * @method \Aws\Result disconnectRecoveryInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disconnectRecoveryInstanceAsync(array $args = [])
 * @method \Aws\Result disconnectSourceServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disconnectSourceServerAsync(array $args = [])
 * @method \Aws\Result getFailbackReplicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFailbackReplicationConfigurationAsync(array $args = [])
 * @method \Aws\Result getLaunchConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLaunchConfigurationAsync(array $args = [])
 * @method \Aws\Result getReplicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReplicationConfigurationAsync(array $args = [])
 * @method \Aws\Result initializeService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initializeServiceAsync(array $args = [])
 * @method \Aws\Result listExtensibleSourceServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExtensibleSourceServersAsync(array $args = [])
 * @method \Aws\Result listStagingAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStagingAccountsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result retryDataReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retryDataReplicationAsync(array $args = [])
 * @method \Aws\Result reverseReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reverseReplicationAsync(array $args = [])
 * @method \Aws\Result startFailbackLaunch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFailbackLaunchAsync(array $args = [])
 * @method \Aws\Result startRecovery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startRecoveryAsync(array $args = [])
 * @method \Aws\Result startReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startReplicationAsync(array $args = [])
 * @method \Aws\Result stopFailback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopFailbackAsync(array $args = [])
 * @method \Aws\Result stopReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopReplicationAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result terminateRecoveryInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateRecoveryInstancesAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateFailbackReplicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFailbackReplicationConfigurationAsync(array $args = [])
 * @method \Aws\Result updateLaunchConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLaunchConfigurationAsync(array $args = [])
 * @method \Aws\Result updateReplicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReplicationConfigurationAsync(array $args = [])
 * @method \Aws\Result updateReplicationConfigurationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReplicationConfigurationTemplateAsync(array $args = [])
 */
class drsClient extends AwsClient {}
