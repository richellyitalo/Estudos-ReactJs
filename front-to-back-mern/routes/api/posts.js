const router = require('express').Router();

// @route   GET api/posts/test
// @desc    Test post route
// @access  Public
router.get('/test', (req, res) => res.json({ msg: 'Posts works!' }));

module.exports = router;
