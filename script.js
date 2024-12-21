// script.js
function copyReferralLink() {
  const referralLink = document.getElementById("referral-link");
  const range = document.createRange();
  range.selectNode(referralLink);
  window.getSelection().removeAllRanges();
  window.getSelection().addRange(range);
  document.execCommand("copy");
  alert("Referral link copied to clipboard!");
}
