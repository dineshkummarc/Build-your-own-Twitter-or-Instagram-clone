<?php
// This file was auto-generated from sdk-root/src/data/compute-optimizer/2019-11-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2019-11-01', 'endpointPrefix' => 'compute-optimizer', 'jsonVersion' => '1.0', 'protocol' => 'json', 'serviceFullName' => 'AWS Compute Optimizer', 'serviceId' => 'Compute Optimizer', 'signatureVersion' => 'v4', 'signingName' => 'compute-optimizer', 'targetPrefix' => 'ComputeOptimizerService', 'uid' => 'compute-optimizer-2019-11-01', ], 'operations' => [ 'GetAutoScalingGroupRecommendations' => [ 'name' => 'GetAutoScalingGroupRecommendations', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetAutoScalingGroupRecommendationsRequest', ], 'output' => [ 'shape' => 'GetAutoScalingGroupRecommendationsResponse', ], 'errors' => [ [ 'shape' => 'OptInRequiredException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'MissingAuthenticationToken', ], [ 'shape' => 'ThrottlingException', ], ], ], 'GetEC2InstanceRecommendations' => [ 'name' => 'GetEC2InstanceRecommendations', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetEC2InstanceRecommendationsRequest', ], 'output' => [ 'shape' => 'GetEC2InstanceRecommendationsResponse', ], 'errors' => [ [ 'shape' => 'OptInRequiredException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'MissingAuthenticationToken', ], [ 'shape' => 'ThrottlingException', ], ], ], 'GetEC2RecommendationProjectedMetrics' => [ 'name' => 'GetEC2RecommendationProjectedMetrics', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetEC2RecommendationProjectedMetricsRequest', ], 'output' => [ 'shape' => 'GetEC2RecommendationProjectedMetricsResponse', ], 'errors' => [ [ 'shape' => 'OptInRequiredException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'MissingAuthenticationToken', ], [ 'shape' => 'ThrottlingException', ], ], ], 'GetEnrollmentStatus' => [ 'name' => 'GetEnrollmentStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetEnrollmentStatusRequest', ], 'output' => [ 'shape' => 'GetEnrollmentStatusResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingAuthenticationToken', ], [ 'shape' => 'ThrottlingException', ], ], ], 'GetRecommendationSummaries' => [ 'name' => 'GetRecommendationSummaries', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetRecommendationSummariesRequest', ], 'output' => [ 'shape' => 'GetRecommendationSummariesResponse', ], 'errors' => [ [ 'shape' => 'OptInRequiredException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingAuthenticationToken', ], [ 'shape' => 'ThrottlingException', ], ], ], 'UpdateEnrollmentStatus' => [ 'name' => 'UpdateEnrollmentStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateEnrollmentStatusRequest', ], 'output' => [ 'shape' => 'UpdateEnrollmentStatusResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingAuthenticationToken', ], [ 'shape' => 'ThrottlingException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'synthetic' => true, ], 'AccountId' => [ 'type' => 'string', ], 'AccountIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccountId', ], ], 'AutoScalingGroupArn' => [ 'type' => 'string', ], 'AutoScalingGroupArns' => [ 'type' => 'list', 'member' => [ 'shape' => 'AutoScalingGroupArn', ], ], 'AutoScalingGroupConfiguration' => [ 'type' => 'structure', 'members' => [ 'desiredCapacity' => [ 'shape' => 'DesiredCapacity', ], 'minSize' => [ 'shape' => 'MinSize', ], 'maxSize' => [ 'shape' => 'MaxSize', ], 'instanceType' => [ 'shape' => 'InstanceType', ], ], ], 'AutoScalingGroupName' => [ 'type' => 'string', ], 'AutoScalingGroupRecommendation' => [ 'type' => 'structure', 'members' => [ 'accountId' => [ 'shape' => 'AccountId', ], 'autoScalingGroupArn' => [ 'shape' => 'AutoScalingGroupArn', ], 'autoScalingGroupName' => [ 'shape' => 'AutoScalingGroupName', ], 'finding' => [ 'shape' => 'Finding', ], 'utilizationMetrics' => [ 'shape' => 'UtilizationMetrics', ], 'lookBackPeriodInDays' => [ 'shape' => 'LookBackPeriodInDays', ], 'currentConfiguration' => [ 'shape' => 'AutoScalingGroupConfiguration', ], 'recommendationOptions' => [ 'shape' => 'AutoScalingGroupRecommendationOptions', ], 'lastRefreshTimestamp' => [ 'shape' => 'LastRefreshTimestamp', ], ], ], 'AutoScalingGroupRecommendationOption' => [ 'type' => 'structure', 'members' => [ 'configuration' => [ 'shape' => 'AutoScalingGroupConfiguration', ], 'projectedUtilizationMetrics' => [ 'shape' => 'ProjectedUtilizationMetrics', ], 'performanceRisk' => [ 'shape' => 'PerformanceRisk', ], 'rank' => [ 'shape' => 'Rank', ], ], ], 'AutoScalingGroupRecommendationOptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'AutoScalingGroupRecommendationOption', ], ], 'AutoScalingGroupRecommendations' => [ 'type' => 'list', 'member' => [ 'shape' => 'AutoScalingGroupRecommendation', ], ], 'Code' => [ 'type' => 'string', ], 'CurrentInstanceType' => [ 'type' => 'string', ], 'DesiredCapacity' => [ 'type' => 'integer', ], 'ErrorMessage' => [ 'type' => 'string', ], 'Filter' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'FilterName', ], 'values' => [ 'shape' => 'FilterValues', ], ], ], 'FilterName' => [ 'type' => 'string', 'enum' => [ 'Finding', 'RecommendationSourceType', ], ], 'FilterValue' => [ 'type' => 'string', ], 'FilterValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilterValue', ], ], 'Filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ], 'Finding' => [ 'type' => 'string', 'enum' => [ 'Underprovisioned', 'Overprovisioned', 'Optimized', 'NotOptimized', ], ], 'GetAutoScalingGroupRecommendationsRequest' => [ 'type' => 'structure', 'members' => [ 'accountIds' => [ 'shape' => 'AccountIds', ], 'autoScalingGroupArns' => [ 'shape' => 'AutoScalingGroupArns', ], 'nextToken' => [ 'shape' => 'NextToken', ], 'maxResults' => [ 'shape' => 'MaxResults', ], 'filters' => [ 'shape' => 'Filters', ], ], ], 'GetAutoScalingGroupRecommendationsResponse' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'NextToken', ], 'autoScalingGroupRecommendations' => [ 'shape' => 'AutoScalingGroupRecommendations', ], 'errors' => [ 'shape' => 'GetRecommendationErrors', ], ], ], 'GetEC2InstanceRecommendationsRequest' => [ 'type' => 'structure', 'members' => [ 'instanceArns' => [ 'shape' => 'InstanceArns', ], 'nextToken' => [ 'shape' => 'NextToken', ], 'maxResults' => [ 'shape' => 'MaxResults', ], 'filters' => [ 'shape' => 'Filters', ], 'accountIds' => [ 'shape' => 'AccountIds', ], ], ], 'GetEC2InstanceRecommendationsResponse' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'NextToken', ], 'instanceRecommendations' => [ 'shape' => 'InstanceRecommendations', ], 'errors' => [ 'shape' => 'GetRecommendationErrors', ], ], ], 'GetEC2RecommendationProjectedMetricsRequest' => [ 'type' => 'structure', 'required' => [ 'instanceArn', 'stat', 'period', 'startTime', 'endTime', ], 'members' => [ 'instanceArn' => [ 'shape' => 'InstanceArn', ], 'stat' => [ 'shape' => 'MetricStatistic', ], 'period' => [ 'shape' => 'Period', ], 'startTime' => [ 'shape' => 'Timestamp', ], 'endTime' => [ 'shape' => 'Timestamp', ], ], ], 'GetEC2RecommendationProjectedMetricsResponse' => [ 'type' => 'structure', 'members' => [ 'recommendedOptionProjectedMetrics' => [ 'shape' => 'RecommendedOptionProjectedMetrics', ], ], ], 'GetEnrollmentStatusRequest' => [ 'type' => 'structure', 'members' => [], ], 'GetEnrollmentStatusResponse' => [ 'type' => 'structure', 'members' => [ 'status' => [ 'shape' => 'Status', ], 'statusReason' => [ 'shape' => 'StatusReason', ], 'memberAccountsEnrolled' => [ 'shape' => 'MemberAccountsEnrolled', ], ], ], 'GetRecommendationError' => [ 'type' => 'structure', 'members' => [ 'identifier' => [ 'shape' => 'Identifier', ], 'code' => [ 'shape' => 'Code', ], 'message' => [ 'shape' => 'Message', ], ], ], 'GetRecommendationErrors' => [ 'type' => 'list', 'member' => [ 'shape' => 'GetRecommendationError', ], ], 'GetRecommendationSummariesRequest' => [ 'type' => 'structure', 'members' => [ 'accountIds' => [ 'shape' => 'AccountIds', ], 'nextToken' => [ 'shape' => 'NextToken', ], 'maxResults' => [ 'shape' => 'MaxResults', ], ], ], 'GetRecommendationSummariesResponse' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'NextToken', ], 'recommendationSummaries' => [ 'shape' => 'RecommendationSummaries', ], ], ], 'Identifier' => [ 'type' => 'string', ], 'IncludeMemberAccounts' => [ 'type' => 'boolean', ], 'InstanceArn' => [ 'type' => 'string', ], 'InstanceArns' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceArn', ], ], 'InstanceName' => [ 'type' => 'string', ], 'InstanceRecommendation' => [ 'type' => 'structure', 'members' => [ 'instanceArn' => [ 'shape' => 'InstanceArn', ], 'accountId' => [ 'shape' => 'AccountId', ], 'instanceName' => [ 'shape' => 'InstanceName', ], 'currentInstanceType' => [ 'shape' => 'CurrentInstanceType', ], 'finding' => [ 'shape' => 'Finding', ], 'utilizationMetrics' => [ 'shape' => 'UtilizationMetrics', ], 'lookBackPeriodInDays' => [ 'shape' => 'LookBackPeriodInDays', ], 'recommendationOptions' => [ 'shape' => 'RecommendationOptions', ], 'recommendationSources' => [ 'shape' => 'RecommendationSources', ], 'lastRefreshTimestamp' => [ 'shape' => 'LastRefreshTimestamp', ], ], ], 'InstanceRecommendationOption' => [ 'type' => 'structure', 'members' => [ 'instanceType' => [ 'shape' => 'InstanceType', ], 'projectedUtilizationMetrics' => [ 'shape' => 'ProjectedUtilizationMetrics', ], 'performanceRisk' => [ 'shape' => 'PerformanceRisk', ], 'rank' => [ 'shape' => 'Rank', ], ], ], 'InstanceRecommendations' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceRecommendation', ], ], 'InstanceType' => [ 'type' => 'string', ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'fault' => true, ], 'InvalidParameterValueException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'synthetic' => true, ], 'LastRefreshTimestamp' => [ 'type' => 'timestamp', ], 'LookBackPeriodInDays' => [ 'type' => 'double', ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, ], 'MaxSize' => [ 'type' => 'integer', ], 'MemberAccountsEnrolled' => [ 'type' => 'boolean', ], 'Message' => [ 'type' => 'string', ], 'MetricName' => [ 'type' => 'string', 'enum' => [ 'Cpu', 'Memory', ], ], 'MetricStatistic' => [ 'type' => 'string', 'enum' => [ 'Maximum', 'Average', ], ], 'MetricValue' => [ 'type' => 'double', ], 'MetricValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricValue', ], ], 'MinSize' => [ 'type' => 'integer', ], 'MissingAuthenticationToken' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'synthetic' => true, ], 'NextToken' => [ 'type' => 'string', ], 'OptInRequiredException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'synthetic' => true, ], 'PerformanceRisk' => [ 'type' => 'double', 'max' => 5, 'min' => 0, ], 'Period' => [ 'type' => 'integer', ], 'ProjectedMetric' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'MetricName', ], 'timestamps' => [ 'shape' => 'Timestamps', ], 'values' => [ 'shape' => 'MetricValues', ], ], ], 'ProjectedMetrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProjectedMetric', ], ], 'ProjectedUtilizationMetrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'UtilizationMetric', ], ], 'Rank' => [ 'type' => 'integer', ], 'RecommendationOptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceRecommendationOption', ], ], 'RecommendationSource' => [ 'type' => 'structure', 'members' => [ 'recommendationSourceArn' => [ 'shape' => 'RecommendationSourceArn', ], 'recommendationSourceType' => [ 'shape' => 'RecommendationSourceType', ], ], ], 'RecommendationSourceArn' => [ 'type' => 'string', ], 'RecommendationSourceType' => [ 'type' => 'string', 'enum' => [ 'Ec2Instance', 'AutoScalingGroup', ], ], 'RecommendationSources' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecommendationSource', ], ], 'RecommendationSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecommendationSummary', ], ], 'RecommendationSummary' => [ 'type' => 'structure', 'members' => [ 'summaries' => [ 'shape' => 'Summaries', ], 'recommendationResourceType' => [ 'shape' => 'RecommendationSourceType', ], 'accountId' => [ 'shape' => 'AccountId', ], ], ], 'RecommendedInstanceType' => [ 'type' => 'string', ], 'RecommendedOptionProjectedMetric' => [ 'type' => 'structure', 'members' => [ 'recommendedInstanceType' => [ 'shape' => 'RecommendedInstanceType', ], 'rank' => [ 'shape' => 'Rank', ], 'projectedMetrics' => [ 'shape' => 'ProjectedMetrics', ], ], ], 'RecommendedOptionProjectedMetrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecommendedOptionProjectedMetric', ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'synthetic' => true, ], 'ServiceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'fault' => true, ], 'Status' => [ 'type' => 'string', 'enum' => [ 'Active', 'Inactive', 'Pending', 'Failed', ], ], 'StatusReason' => [ 'type' => 'string', ], 'Summaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'Summary', ], ], 'Summary' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'Finding', ], 'value' => [ 'shape' => 'SummaryValue', ], ], ], 'SummaryValue' => [ 'type' => 'double', ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'synthetic' => true, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'Timestamps' => [ 'type' => 'list', 'member' => [ 'shape' => 'Timestamp', ], ], 'UpdateEnrollmentStatusRequest' => [ 'type' => 'structure', 'required' => [ 'status', ], 'members' => [ 'status' => [ 'shape' => 'Status', ], 'includeMemberAccounts' => [ 'shape' => 'IncludeMemberAccounts', ], ], ], 'UpdateEnrollmentStatusResponse' => [ 'type' => 'structure', 'members' => [ 'status' => [ 'shape' => 'Status', ], 'statusReason' => [ 'shape' => 'StatusReason', ], ], ], 'UtilizationMetric' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'MetricName', ], 'statistic' => [ 'shape' => 'MetricStatistic', ], 'value' => [ 'shape' => 'MetricValue', ], ], ], 'UtilizationMetrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'UtilizationMetric', ], ], ],];
