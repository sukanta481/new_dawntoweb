-- Minimal tables you can extend
CREATE TABLE IF NOT EXISTS report_documents (
  id INT AUTO_INCREMENT PRIMARY KEY,
  client_id INT NOT NULL,
  title VARCHAR(255) NOT NULL,
  file_path VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS metrics_daily (
  id INT AUTO_INCREMENT PRIMARY KEY,
  client_id INT NOT NULL,
  metric_date DATE NOT NULL,
  spend DECIMAL(10,2) DEFAULT 0,
  clicks INT DEFAULT 0,
  impressions INT DEFAULT 0,
  roas DECIMAL(6,2) DEFAULT 0,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY uniq_client_date (client_id, metric_date)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Optional: ingestion log
CREATE TABLE IF NOT EXISTS ingest_log (
  id INT AUTO_INCREMENT PRIMARY KEY,
  filename VARCHAR(255),
  status VARCHAR(32) DEFAULT 'queued',
  rows_intake INT DEFAULT 0,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
