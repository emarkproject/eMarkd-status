<?php
/**
 * Bitcoin Status Page
 *
 * @category File
 * @package  BitcoinStatus
 * @author   Craig Watson <craig@cwatson.org>
 * @license  https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @link     https://github.com/craigwatson/bitcoind-status
 */

$config = array(
  // RPC
  'rpc_user'                => 'rpcuser',
  'rpc_pass'                => 'rpcpass',
  'rpc_host'                => 'localhost',
  'rpc_port'                => '6666',
  'rpc_ssl'                 => false,
  'rpc_ssl_ca'              => null,

  // Donations
  'display_donation_text'   => true,
  'donation_address'        => 'NgJKYsHctQfF8D8r6otTGxdnB6r311NvJf',
  'donation_amount'         => '10',

  // Peers
  'display_peer_info'       => true,
  'display_peer_port'       => false,
  'hide_dark_peers'         => true,
  'peers_to_ignore'         => array(),

  // Cache
  'use_cache'               => true,
  'cache_file'              => '/tmp/eMarkd-status.cache',
  'max_cache_time'          => 300,
  'nocache_whitelist'       => array('127.0.0.1'),

  // Geolocation
  'geolocate_peer_ip'       => true,
  'display_ip_location'     => true,

  // UI
  'display_ip'              => true,
  'display_free_disk_space' => false,
  'display_testnet'         => false,
  'display_version'         => true,
  'display_github_ribbon'   => false,
  'display_max_height'      => true,
  'use_bitcoind_ip'         => true,
  'intro_text'              => 'eMark Status',
  'display_bitnodes_info'   => false,
  'display_chart'           => true,
  'node_links'              => array(),

  // Stats
  'stats_whitelist'         => array('127.0.0.1'),
  'stats_file'              => '/tmp/eMarkd-status.data',
  'stats_max_age'           => '604800',
  'stats_min_data_points'   => 5,

  // Uptime
  'display_bitcoind_uptime' => true,
  'bitcoind_process_name'   => 'eMarkd',

  // System
  'date_format'             => 'H:i:s T, j F Y ',
  'timezone'                => null,
  'stylesheet'              => 'v2-dark.css',
  'debug'                   => false,
  'admin_email'             => 'rumhocker@deutsche-emark.org',
);
