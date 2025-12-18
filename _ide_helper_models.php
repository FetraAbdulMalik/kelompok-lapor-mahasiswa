<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property int|null $user_id
 * @property string $action
 * @property string|null $model_type
 * @property int|null $model_id
 * @property string $description
 * @property array<array-key, mixed>|null $properties
 * @property string|null $ip_address
 * @property string|null $user_agent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $action_icon
 * @property-read mixed $action_name
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent|null $model
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog byAction($action)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog byUser($userId)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog recent()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereUserId($value)
 */
	class ActivityLog extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int|null $floors
 * @property string|null $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int|null $faculty_id
 * @property string|null $address
 * @property int $floor_count
 * @property bool $is_active
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Facility> $facilities
 * @property-read int|null $facilities_count
 * @property-read \App\Models\Faculty|null $faculty
 * @property-read mixed $facility_count
 * @property-read mixed $report_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Report> $reports
 * @property-read int|null $reports_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building active()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building byFaculty($facultyId)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereFacultyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereFloorCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereUpdatedAt($value)
 */
	class Building extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $report_id
 * @property int $user_id
 * @property string $comment
 * @property bool $is_official
 * @property bool $is_internal
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $author_name
 * @property-read mixed $author_role
 * @property-read mixed $badge_color
 * @property-read \App\Models\Report $report
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment internal()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment official()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment public()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereIsInternal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereIsOfficial($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereReportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereUserId($value)
 */
	class Comment extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $faculty_id
 * @property string $name
 * @property string $code
 * @property string|null $head_of_department
 * @property string|null $email
 * @property bool $is_active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\Faculty $faculty
 * @property-read mixed $full_name
 * @property-read mixed $student_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StudentProfile> $students
 * @property-read int|null $students_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department active()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereFacultyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereHeadOfDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereUpdatedAt($value)
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $building_id
 * @property string $name
 * @property string $code
 * @property int|null $floor
 * @property string|null $room_number
 * @property int|null $capacity
 * @property string|null $type
 * @property string|null $description
 * @property bool $is_active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\Building $building
 * @property-read mixed $full_location
 * @property-read mixed $full_name
 * @property-read mixed $type_name
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Report> $reports
 * @property-read int|null $reports_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility active()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility byBuilding($buildingId)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility byType($type)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility whereBuildingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility whereFloor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Facility whereUpdatedAt($value)
 */
	class Facility extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string|null $dean_name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $description
 * @property bool $is_active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Building> $buildings
 * @property-read int|null $buildings_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Department> $departments
 * @property-read int|null $departments_count
 * @property-read mixed $department_count
 * @property-read mixed $student_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StudentProfile> $students
 * @property-read int|null $students_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faculty active()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faculty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faculty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faculty query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faculty whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faculty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faculty whereDeanName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faculty whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faculty whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faculty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faculty whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faculty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faculty wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Faculty whereUpdatedAt($value)
 */
	class Faculty extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $type
 * @property string $title
 * @property string $message
 * @property int|null $related_id
 * @property string|null $related_type
 * @property bool $is_read
 * @property \Carbon\Carbon|null $read_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property array<array-key, mixed>|null $data
 * @property int|null $report_id
 * @property-read mixed $icon
 * @property-read mixed $type_name
 * @property-read \App\Models\Report|null $report
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification read()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification recent()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification unread()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification whereReportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Notification whereUserId($value)
 */
	class Notification extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int $category_id
 * @property int|null $facility_id
 * @property string $title
 * @property string $description
 * @property string $status
 * @property string|null $priority
 * @property bool $is_anonymous
 * @property \Carbon\Carbon|null $resolved_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $reference_number
 * @property string|null $location
 * @property int|null $building_id
 * @property \Illuminate\Support\Carbon|null $incident_date
 * @property string $visibility
 * @property int|null $assigned_to
 * @property \Illuminate\Support\Carbon|null $assigned_at
 * @property string|null $resolution_notes
 * @property int $views_count
 * @property-read \App\Models\User|null $assignedTo
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ReportAttachment> $attachments
 * @property-read int|null $attachments_count
 * @property-read \App\Models\Building|null $building
 * @property-read \App\Models\ReportCategory $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Comment> $comments
 * @property-read int|null $comments_count
 * @property-read \App\Models\Facility|null $facility
 * @property-read mixed $days_open
 * @property-read mixed $full_location
 * @property-read mixed $priority_badge_color
 * @property-read mixed $priority_label
 * @property-read mixed $reporter_avatar
 * @property-read mixed $reporter_name
 * @property-read mixed $status_badge_color
 * @property-read mixed $status_label
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Notification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ReportStatus> $statusHistory
 * @property-read int|null $status_history_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report assignedTo($userId)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report byCategory($categoryId)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report byUser($userId)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report inProgress()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report inReview()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report pending()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report public()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report recent()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report rejected()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report resolved()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereAssignedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereAssignedTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereBuildingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereFacilityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereIncidentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereIsAnonymous($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereReferenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereResolutionNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereResolvedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereViewsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereVisibility($value)
 */
	class Report extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $report_id
 * @property string $file_name
 * @property string $file_path
 * @property string $file_type
 * @property int $file_size
 * @property string $mime_type
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $file_size_human
 * @property-read mixed $icon
 * @property-read mixed $url
 * @property-read \App\Models\Report $report
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportAttachment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportAttachment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportAttachment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportAttachment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportAttachment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportAttachment whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportAttachment whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportAttachment whereFileSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportAttachment whereFileType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportAttachment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportAttachment whereMimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportAttachment whereReportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportAttachment whereUpdatedAt($value)
 */
	class ReportAttachment extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string|null $description
 * @property string|null $icon
 * @property string|null $color
 * @property bool $is_active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $slug
 * @property string|null $department_handle
 * @property int $sort_order
 * @property-read mixed $pending_report_count
 * @property-read mixed $report_count
 * @property-read mixed $resolved_report_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Report> $reports
 * @property-read int|null $reports_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory active()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereDepartmentHandle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereUpdatedAt($value)
 */
	class ReportCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $report_id
 * @property string|null $previous_status
 * @property string $new_status
 * @property string|null $notes
 * @property int $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $createdBy
 * @property-read mixed $status_color
 * @property-read mixed $status_icon
 * @property-read mixed $status_label
 * @property-read \App\Models\Report $report
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereNewStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus wherePreviousStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereReportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereUpdatedAt($value)
 */
	class ReportStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int $department_id
 * @property string $student_number
 * @property string|null $year
 * @property string|null $address
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $nim
 * @property int $faculty_id
 * @property int $semester
 * @property int $year_of_entry
 * @property string $status
 * @property string|null $avatar
 * @property-read \App\Models\Department $department
 * @property-read \App\Models\Faculty $faculty
 * @property-read mixed $avatar_url
 * @property-read mixed $current_semester
 * @property-read mixed $full_name
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile active()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile byDepartment($departmentId)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile byFaculty($facultyId)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile whereFacultyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile whereNim($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile whereSemester($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StudentProfile whereYearOfEntry($value)
 */
	class StudentProfile extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $phone
 * @property string $role
 * @property bool $is_active
 * @property \Carbon\Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ActivityLog> $activityLogs
 * @property-read int|null $activity_logs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Report> $assignedReports
 * @property-read int|null $assigned_reports_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Comment> $comments
 * @property-read int|null $comments_count
 * @property-read mixed $avatar
 * @property-read mixed $full_name
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Notification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Report> $reports
 * @property-read int|null $reports_count
 * @property-read \App\Models\StudentProfile|null $studentProfile
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User active()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User admins()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User students()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

