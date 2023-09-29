// Định nghĩa ngày hết hạn của đếm ngược
const countdownDate = new Date(); // Đặt ngày hết hạn ở đây
console.log(countdownDate.getHours());
countdownDate.setDate(countdownDate.getDate() + 11); // Thêm 11 ngày

// Cập nhật thời gian đếm ngược sau mỗi giây
const countdownInterval = setInterval(updateCountdown, 1000);

function updateCountdown() {
    const currentDate = new Date();
    const timeDifference = countdownDate - currentDate;

    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
        (timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    const minutes = Math.floor(
        (timeDifference % (1000 * 60 * 60)) / (1000 * 60)
    );
    const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

    document.getElementById("days").textContent = days;
    document.getElementById("hours").textContent = hours;
    document.getElementById("minutes").textContent = minutes;
    document.getElementById("seconds").textContent = seconds;
}
