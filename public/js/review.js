function onAnswerReviewButtonClick(id) {
    const answerSection = document.getElementById(`review-answer-${id}`);
    answerSection.classList.toggle('review--open');
}
