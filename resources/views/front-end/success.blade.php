<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation - Success</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="logo">
                <h1>Vrinda</h1>
            </div>
        </div>

        <!-- Main Content -->
        <div class="success-container">
            <!-- Success Icon & Title -->
            <div class="success-header">
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h1 class="success-title">Booking Confirmed!</h1>
                <p>"Thank you for reaching out to us. Our team will get in touch with you as soon as possible."</p>
            </div>

            <!-- Quick Info Card - Visible on Front -->
            <div class="quick-info-card">
                <div class="service-section">
                    <p class="service-label">Service Booked</p>
                    <p class="service-name">Premium Event Planning Package</p>
                </div>

                <div class="quick-details">
                    <div class="quick-item">
                        <i class="fas fa-calendar-alt"></i>
                        <div>
                            <p class="quick-label">Date</p>
                            <p class="quick-value">{{$booking->ride_date}}</p>
                        </div>
                    </div>
                    <div class="quick-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <p class="quick-label">Time</p>
                            <p class="quick-value">{{$booking->ride_time}}</p>
                        </div>
                    </div>
                    <div class="quick-item">
                        <i class="fas fa-tag"></i>
                        <div>
                            <p class="quick-label">Total Amount</p>
                            <p class="quick-value amount">{{$booking->fare}}</p>
                        </div>
                    </div>
                </div>

                <div class="status-inline">
                    <i class="fas fa-check"></i>
                    <span>PENDING</span>
                </div>
            </div>

            <!-- Confirmation Message -->
            <p class="success-message">Your booking has been successfully confirmed. A confirmation email has been sent to your registered email address.</p>

            <!-- Action Buttons - Primary CTA -->
            <!-- <div class="button-group-top">
                <button class="btn btn-primary">
                    <i class="fas fa-download"></i> Download Receipt
                </button>
                <button class="btn btn-outline">
                    <i class="fas fa-home"></i> Back to Home
                </button>
            </div> -->

            <!-- Booking Details Card -->
            <div class="booking-card">
                <!-- Confirmation Number -->
                <div class="confirmation-section">
                    <div class="confirmation-box">
                        <p class="label">Confirmation Number</p>
                        <p class="confirmation-id">{{$booking->booking_no}}</p>
                    </div>
                </div>

                <!-- Divider -->
                <div class="divider"></div>

                <!-- Booking Details Grid -->
                <div class="details-section">
                    <h3 class="section-title">Complete Booking Details</h3>
                    <div class="details-grid">
                        <div class="detail-item">
                            <p class="label">
                                <i class="fas fa-briefcase"></i> Service
                            </p>
                            <p class="value">Premium Event Planning Package</p>
                        </div>

                        <div class="detail-item">
                            <p class="label">
                                <i class="fas fa-calendar-alt"></i> Date
                            </p>
                            <p class="value">{{$booking->ride_date}}</p>
                        </div>

                        <div class="detail-item">
                            <p class="label">
                                <i class="fas fa-clock"></i> Time
                            </p>
                            <p class="value">{{$booking->ride_time}}</p>
                        </div>

                        <div class="detail-item">
                            <p class="label">
                                <i class="fas fa-map-marker-alt"></i>Pickup Location
                            </p>
                            <p class="value">{{$booking->pickup_location}}</p>
                        </div>

                        <div class="detail-item">
                            <p class="label">
                                <i class="fas fa-map-marker-alt"></i>Drop Location
                            </p>
                            <p class="value">{{$booking->drop_location}}</p>
                        </div>

                        <div class="detail-item">
                            <p class="label">
                                <i class="fas fa-user"></i> Organizer
                            </p>
                            <p class="value">{{$booking->name}}</p>
                        </div>

                        <div class="detail-item">
                            <p class="label">
                                <i class="fas fa-phone"></i> Contact
                            </p>
                            <p class="value">+91 {{$booking->phone}}</p>
                        </div>

                        <div class="detail-item">
                            <p class="label">
                                <i class="fas fa-envelope"></i> Email
                            </p>
                            <p class="value">{{$booking->email}}</p>
                        </div>

                        <div class="detail-item">
                            <p class="label">
                                <i class="fas fa-credit-card"></i> Payment Method
                            </p>
                            <p class="value">Credit Card (VISA)</p>
                        </div>
                    </div>
                </div>

                <!-- Divider -->
                <div class="divider"></div>

                <!-- Amount Section -->
                <div class="amount-section">
                    <h3 class="section-title">Payment Summary</h3>
                    <div class="amount-row">
                        <span class="amount-label">Subtotal</span>
                        <span class="amount-value">₹ {{$booking->fare}}</span>
                    </div>
                    <div class="amount-row">
                        <!-- <span class="amount-label">Tax (18% GST)</span>
                        <span class="amount-value">₹4,500.00</span> -->
                    </div>
                    <div class="amount-row total">
                        <span class="amount-label">Total Amount Paid</span>
                        <span class="amount-value">₹ {{$booking->fare}}</span>
                    </div>
                </div>

                <!-- Divider -->
                <div class="divider"></div>

                <!-- Important Notes -->
                <div class="notes-section-inline">
                    <h3 class="section-title">Important Information</h3>
                    <ul>
                        <li>Please arrive 15 minutes before your scheduled time</li>
                        <li>Keep your confirmation number for reference</li>
                        <li>For any changes, contact us at least 48 hours in advance</li>
                        <li>Cancellation policy applies as per terms and conditions</li>
                    </ul>
                </div>
            </div>

            <!-- Additional Actions -->
            <div class="button-group-bottom">
                <p>To confirm your booking, please click on WhatsApp or call us.</p>
                <a href="{{ route('booking.whatsapp', $booking->id) }}" class="btn theme-btn btn-outline-secondary">
                       Send on WhatsApp
                </a>
                <button class="btn btn-outline-secondary">
                    <i class="fas fa-question-circle"></i> Need Help?
                </button>
            </div>

            <!-- Contact Support -->
            <div class="support-section">
                <p>For any queries, <a href="mailto:support@vrinda.com">contact our support team</a></p>
                <p class="support-phone">Call us: <strong>+91 9452667708</strong></p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; 2026 Vrinda. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a></p>
        </div>
    </div>

    <!-- <script src="script.js"></script> -->
</body>
</html>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --primary-color: #1e40af;
    --secondary-color: #0f766e;
    --success-color: #16a34a;
    --light-bg: #f8fafc;
    --border-color: #e2e8f0;
    --text-dark: #1e293b;
    --text-light: #64748b;
    --white: #ffffff;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: var(--light-bg);
    color: var(--text-dark);
    line-height: 1.6;
}

.container {
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
}

/* Header */
.header {
    text-align: center;
    padding: 30px 20px;
    background-color: var(--white);
    border-bottom: 2px solid var(--primary-color);
    margin-bottom: 30px;
    border-radius: 8px 8px 0 0;
}

.logo h1 {
    font-size: 32px;
    color: var(--primary-color);
    font-weight: 700;
    letter-spacing: -0.5px;
}

/* Success Container */
.success-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
}

/* Success Header */
.success-header {
    text-align: center;
    animation: slideDown 0.6s ease-out;
}

@keyframes slideDown {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Success Icon */
.success-icon {
    font-size: 60px;
    color: var(--success-color);
    margin-bottom: 12px;
    animation: scaleIn 0.6s ease-out;
}

@keyframes scaleIn {
    from {
        transform: scale(0);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

/* Success Title */
.success-title {
    font-size: 32px;
    color: var(--primary-color);
    margin-bottom: 5px;
    font-weight: 700;
}

/* Quick Info Card - Front View */
.quick-info-card {
    width: 100%;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: var(--white);
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 4px 15px rgba(30, 64, 175, 0.25);
    animation: slideUp 0.6s ease-out;
    position: relative;
}

@keyframes slideUp {
    from {
        transform: translateY(20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.service-section {
    margin-bottom: 20px;
    text-align: center;
}

.service-label {
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
    opacity: 0.9;
    margin-bottom: 8px;
    display: block;
}

.service-name {
    font-size: 22px;
    font-weight: 700;
    line-height: 1.4;
}

.quick-details {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin: 25px 0;
    padding: 20px 0;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.quick-item {
    display: flex;
    align-items: center;
    gap: 12px;
    text-align: left;
}

.quick-item i {
    font-size: 20px;
    opacity: 0.9;
}

.quick-item div {
    flex: 1;
}

.quick-label {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    opacity: 0.85;
    margin-bottom: 4px;
    display: block;
}

.quick-value {
    font-size: 15px;
    font-weight: 600;
}

.quick-value.amount {
    font-size: 18px;
    font-weight: 700;
}

.status-inline {
    text-align: center;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background-color: rgba(255, 255, 255, 0.2);
    padding: 10px 20px;
    border-radius: 20px;
    font-weight: 700;
    font-size: 12px;
    letter-spacing: 0.5px;
    margin: 0 auto;
    display: flex;
    width: fit-content;
    margin-left: auto;
    margin-right: auto;
}

.status-inline i {
    font-size: 14px;
}

/* Success Message */
.success-message {
    font-size: 15px;
    color: var(--text-light);
    text-align: center;
    max-width: 600px;
    line-height: 1.8;
    margin: 10px 0;
}

/* Top Button Group */
.button-group-top {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    justify-content: center;
    width: 100%;
    max-width: 500px;
    margin: 15px auto;
}

/* Booking Card */
.booking-card {
    width: 100%;
    background-color: var(--white);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 35px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

/* Confirmation Section */
.confirmation-section {
    margin-bottom: 20px;
}

.confirmation-box {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: var(--white);
    padding: 20px;
    border-radius: 8px;
    text-align: center;
}

.confirmation-box .label {
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
    opacity: 0.9;
    margin-bottom: 8px;
}

.confirmation-id {
    font-size: 24px;
    font-weight: 700;
    letter-spacing: 2px;
}

/* Divider */
.divider {
    height: 1px;
    background-color: var(--border-color);
    margin: 25px 0;
}

/* Section Title */
.section-title {
    font-size: 15px;
    color: var(--primary-color);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 20px;
    font-weight: 700;
}

/* Details Section */
.details-section {
    margin-bottom: 10px;
}

/* Details Grid */
.details-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
}

.detail-item {
    display: flex;
    flex-direction: column;
}

.detail-item .label {
    font-size: 12px;
    text-transform: uppercase;
    color: var(--text-light);
    letter-spacing: 0.5px;
    margin-bottom: 8px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
}

.detail-item .label i {
    color: var(--primary-color);
    width: 16px;
}

.detail-item .value {
    font-size: 15px;
    color: var(--text-dark);
    font-weight: 500;
    line-height: 1.5;
}

/* Amount Section */
.amount-section {
    margin-top: 10px;
}

.amount-row {
    display: flex;
    justify-content: space-between;
    padding: 12px 0;
    border-bottom: 1px solid var(--border-color);
    font-size: 15px;
}

.amount-row.total {
    border-bottom: none;
    border-top: 2px solid var(--primary-color);
    margin-top: 10px;
    padding-top: 15px;
    font-weight: 700;
    font-size: 17px;
    color: var(--primary-color);
}

.amount-label {
    color: var(--text-light);
}

.amount-value {
    color: var(--text-dark);
    font-weight: 600;
}

.amount-row.total .amount-value {
    color: var(--primary-color);
}

/* Notes Section Inside Card */
.notes-section-inline {
    margin-top: 10px;
}

.notes-section-inline ul {
    list-style: none;
}

.notes-section-inline li {
    padding: 10px 0 10px 28px;
    position: relative;
    color: var(--text-dark);
    font-size: 14px;
    line-height: 1.6;
    border-bottom: 1px solid var(--border-color);
}

.notes-section-inline li:last-child {
    border-bottom: none;
}

.notes-section-inline li:before {
    content: "✓";
    position: absolute;
    left: 0;
    color: var(--success-color);
    font-weight: bold;
    font-size: 16px;
}

/* Bottom Button Group */
.button-group-bottom {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    justify-content: center;
    width: 100%;
    max-width: 500px;
    margin: 20px auto;
}

/* Buttons */
.btn {
    padding: 11px 24px;
    border: none;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    justify-content: center;
    min-width: 160px;
}

.btn-primary {
    background-color: var(--primary-color);
    color: var(--white);
}

.btn-primary:hover {
    background-color: #1e3a8a;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(30, 64, 175, 0.3);
}

.btn-secondary {
    background-color: var(--secondary-color);
    color: var(--white);
}

.btn-secondary:hover {
    background-color: #0d5c61;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(15, 118, 110, 0.3);
}

.btn-outline {
    background-color: transparent;
    color: var(--primary-color);
    border: 2px solid var(--primary-color);
}

.btn-outline:hover {
    background-color: var(--primary-color);
    color: var(--white);
    transform: translateY(-2px);
}

.btn-outline-secondary {
    background-color: transparent;
    color: var(--secondary-color);
    border: 2px solid var(--secondary-color);
}

.btn-outline-secondary:hover {
    background-color: var(--secondary-color);
    color: var(--white);
    transform: translateY(-2px);
}

/* Support Section */
.support-section {
    text-align: center;
    padding: 25px 20px;
    background-color: var(--light-bg);
    border-radius: 8px;
    width: 100%;
    max-width: 500px;
    margin: 0 auto;
}

.support-section p {
    margin: 8px 0;
    font-size: 14px;
    color: var(--text-dark);
}

.support-section a {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.support-section a:hover {
    color: var(--secondary-color);
    text-decoration: underline;
}

.support-phone {
    margin-top: 12px;
    padding-top: 12px;
    border-top: 1px solid var(--border-color);
}

/* Footer */
.footer {
    text-align: center;
    padding: 25px 20px;
    border-top: 1px solid var(--border-color);
    color: var(--text-light);
    font-size: 12px;
    margin-top: 35px;
}

.footer a {
    color: var(--primary-color);
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer a:hover {
    color: var(--secondary-color);
    text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 12px;
    }

    .header {
        padding: 20px 12px;
        margin-bottom: 20px;
    }

    .logo h1 {
        font-size: 24px;
    }

    .success-title {
        font-size: 26px;
    }

    .success-icon {
        font-size: 50px;
    }

    .quick-info-card {
        padding: 22px;
    }

    .service-name {
        font-size: 18px;
    }

    .quick-details {
        grid-template-columns: 1fr;
        gap: 15px;
        margin: 18px 0;
        padding: 18px 0;
    }

    .quick-item {
        padding: 8px 0;
    }

    .success-message {
        font-size: 14px;
    }

    .button-group-top,
    .button-group-bottom {
        max-width: 100%;
    }

    .booking-card {
        padding: 22px;
    }

    .details-grid {
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .confirmation-id {
        font-size: 20px;
    }

    .support-section {
        max-width: 100%;
    }
}

@media (max-width: 480px) {
    .quick-info-card {
        padding: 18px;
    }

    .service-name {
        font-size: 16px;
    }

    .quick-details {
        grid-template-columns: 1fr;
        gap: 12px;
        margin: 15px 0;
        padding: 15px 0;
    }

    .quick-label {
        font-size: 10px;
    }

    .quick-value {
        font-size: 14px;
    }

    .quick-value.amount {
        font-size: 16px;
    }

    .success-title {
        font-size: 22px;
    }

    .success-icon {
        font-size: 45px;
    }

    .success-message {
        font-size: 13px;
    }

    .booking-card {
        padding: 18px;
    }

    .btn {
        padding: 10px 18px;
        font-size: 13px;
        min-width: 140px;
    }

    .button-group-top,
    .button-group-bottom {
        gap: 10px;
    }

    .confirmation-id {
        font-size: 18px;
    }

    .section-title {
        font-size: 13px;
        margin-bottom: 15px;
    }

    .detail-item .value {
        font-size: 14px;
    }

    .amount-row {
        font-size: 13px;
        padding: 10px 0;
    }

    .amount-row.total {
        font-size: 15px;
    }

    .notes-section-inline li {
        font-size: 13px;
        padding: 8px 0 8px 24px;
    }

    .support-section {
        padding: 20px 15px;
    }

    .support-section p {
        font-size: 13px;
    }

    .footer {
        font-size: 11px;
        padding: 20px 12px;
    }
}

/* Print Styles */
@media print {
    .button-group-top,
    .button-group-bottom,
    .support-section,
    .footer {
        display: none;
    }

    .booking-card {
        box-shadow: none;
        border: 1px solid #ccc;
    }

    body {
        background-color: white;
    }

    .container {
        max-width: 100%;
    }
}

    </style>