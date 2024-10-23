package io.prometheus.client;
import com.codahale.metrics.MetricRegistry;
import io.prometheus.client.CollectorRegistry;
import io.prometheus.client.dropwizard.DropwizardExports;
import io.prometheus.client.exporter.HTTPServer;
import io.prometheus.client.hotspot.DefaultExports;

public class MetricsInitializer {

    private static final MetricRegistry metricRegistry = new MetricRegistry();
    private static HTTPServer server;

    public static void initializeMetrics() throws Exception {
        boolean enableMetrics = Boolean.parseBoolean(System.getProperty("enableMetrics"));
        if (!enableMetrics) {
            return;
        }
        int port = Integer.parseInt(System.getProperty("metricsPort", "9090"));

        // Register Dropwizard metrics to Prometheus
        CollectorRegistry.defaultRegistry.register(new DropwizardExports(metricRegistry));

        // Register JVM metrics
        DefaultExports.initialize();

        // Start the Prometheus HTTP server
        server = new HTTPServer(port);
    }

    public static MetricRegistry getMetricRegistry() {
        return metricRegistry;
    }

    public static void stopMetricsServer() {
        if (server != null) {
            server.stop();
        }
    }
}