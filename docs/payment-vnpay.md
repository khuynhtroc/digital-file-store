# VNPay (sandbox) quick guide

- VNPay provides sandbox credentials for testing.
- Implement server-side signature generation following VNPay docs.
- After payment, VNPay will call your return URL / callback — validate signature and update order status.
