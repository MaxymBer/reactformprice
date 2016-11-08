<!DOCTYPE html>
<html>
<head>
<script src="react.js"></script>
<script src="react-dom.js"></script>
<script src="https://unpkg.com/babel-core@5.8.38/browser.min.js"></script>
</head>
	<body>))
		  <div id="content"></div>
    <script type="text/babel">
	var data = [
  {id: 1, author: "Pete Hunt", text: "This is one comment!!!"},
  {id: 2, author: "Jordan Walke", text: "This is *another* comment!!!"}
];	// like json
var Comment = React.createClass({
  render: function() {
    return (
      <div className="comment">
        <h2 className="commentAuthor">
          {this.props.author}
        </h2>
        {this.props.children}
      </div>
    );
  }
});
var CommentList = React.createClass({
  render: function() {
    var commentNodes = this.props.data.map(function(comment) {
      return (
        <Comment author={comment.author} key={comment.id}>
         {comment.text}
        </Comment>
      );
    });
    return (
      <div className="commentList">
        {commentNodes}
      </div>
    );
  }
});
var CommentForm = React.createClass({
  render: function() {
    return (
      <div className="commentForm">
        Hello, world! I am a CommentForm.
      </div>
    );
  }
});
var CommentBox = React.createClass({
  render: function() {
    return (
      <div className="commentBox">
        <h1>Comments</h1>
        <CommentList data={this.props.data} />
        <CommentForm />
      </div>
    );
  }
});
ReactDOM.render(
  <CommentBox data={data} />,/* <CommentBox url="/api/comments" />, */
  document.getElementById('content')
);
</script>
</body>
</html>